<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->category->get();
        
        return view('admin.category.index')->with(compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $path           = $request->file('file')->store('public/files');
        $explodePath    = explode("/", $path);
        $picture 	    = end($explodePath);
        $createData = [
            'name' => $request->name,
            'description' => $request->description,
            'picture' => $picture,
        ];
        $addCategory = $this->category->addCategory($createData);
        if ($addCategory) {
            return redirect()->route('category.index')->with('msgAddSuccess', 'Thêm danh mục thành công.');
        } else {
            return redirect()->route('category.create')->with('msgAddFail', 'Thêm danh mục không thành công.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->category->findOrFail($id);

        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->name;
        $description = $request->description;
        $picture = $request->file('file');
        if ($picture == "") {
            $data = [
                'name' => $name,
                'description' => $description,
            ];
        } else {
            $path = $request->file('file')->store('public/files');
            $explodePath = explode("/", $path);
            $picture 	 = end($explodePath);
            $data = [
                'name' => $name,
                'description' => $description,
                'picture' => $picture,
            ];
        }
        $updateCategory = $this->category->updateCategory($data, $id);
        if ($updateCategory) {
            return redirect()->route('category.index')->with("msgUpdateSuccess", "Cập nhật thành công");
        } else {
            return redirect()->route('category.edit')->with("msgUpdateFail", "Lỗi. Vui lòng thử lại.");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteCategory = $this->category->deleteCategory($id);
        if ($deleteCategory) {
            return redirect()->route('category.index')->with('msgDeleteSuccess', 'Xóa thành công');
        } else {
            return redirect()->route('category.index')->with('msgDeleteFail', 'Xóa không thành công');
        }
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $categories = $this->category->searchItem($search);
        
        return view('admin.category.index')->with(compact('categories'));
    }
}
