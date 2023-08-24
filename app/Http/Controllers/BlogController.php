<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    function index(Request $request)
    {
        $data['title'] = 'Data Blog';

        if ($request->ajax()) {
            return DataTables::of(Blog::all())
                ->addIndexColumn()
                ->addColumn('action', function (Blog $blog) {
                    $btn = '<a href="blogs/detail/'.$blog->id.'" class="dropdown-item">Lihat</a> ';
                    $btn .= '<a href="blogs/edit/'.$blog->id.'" class="dropdown-item">Edit</a>';
                    $btn .= '<button data-id="'.$blog->id.'" class="dropdown-item text-danger delete">Hapus</button> ';

                    return '<span class="dropdown">
                                <button class="btn btn-outline-dark dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Aksi</button>
                                <div class="dropdown-menu">' .
                                    $btn
                                .'</div>
                            </span>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.blog.index', $data);
    }

    function create()
    {
        $data['title'] = 'Buat Blog';

        return view('admin.blog.form-modal', $data);
    }

    function detail(Request $request)
    {
        $data['title'] = 'Lihat Blog';
        $data['blog'] = Blog::findOrFail($request->id);

        return view('admin.blog.detail', $data);
    }

    function edit(Request $request)
    {
        $data['title'] = 'Edit Blog';
        $data['blog'] = Blog::findOrFail($request->id);

        return view('admin.blog.form-modal', $data);
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'title' => ($request->id) ? 'required' : 'required|unique:blogs',
                'body' => 'required',
            ],
            [
                'title.required' => 'Mohon isi kolom judul artikel',
                'title.unique' => 'Sudah ada artikel dengan judul yang sama',
                'body.required' => 'Mohon lengkapi isi artikel',
            ],
        );

        $image = $request->hidden_image;

        if ($request->file('image')) {
            $path = 'public/blog-images/';
            $file = $request->file('image');
            $file_name = Str::random(5) . time() . '_' . $file->getClientOriginalName();

            $file->storeAs($path, $file_name);
            $image = "storage/blog-images/" . $file_name;
        }

        $data = Blog::updateOrCreate([
            'id' => $request->id,
        ], [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,
            'image' => $image,
        ]);

        if ($request->id != $data->id) {
            return response()->json([
                'code' => 200,
                'status' => 'Berhasil!',
                'message' => 'Artikel telah ditambahkan.',
            ]);
        } else {
            return response()->json([
                'code' => 200,
                'status' => 'Berhasil!',
                'message' => 'Data telah diperbaharui.',
            ]);
        }
    }

    function destroy(Request $request)
    {
        $data = Blog::findOrFail($request->id);
        $data->delete();

        return response()->json([
            'code' => 200,
            'status' => 'Berhasil!',
            'message' => 'Data telah dihapus dari sistem.',
        ]);
    }
}
