<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = category::all(); // hiển thị ra tất cả các trường dữ liệu trong table category
        return view('admin.categoryAdmin', compact('category')); // lấy ra toàn bộ các trường, danh sách trong table category để hiển thị ra view
    }
    // sau đó ở trong view chúng ta sẽ truyền các tham số, method vào từng nút
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $category = new category(); // khởi tạo một category mới để lưu những gì mình nhập ở ô input
        $category->category_name = $request->category_name; // gửi một yêu cầu gán giá trị yêu cầu vào thuộc tính category_name, trong cái ô input của mình trong view
        $category->save(); // Lưu lại
        return redirect(route('indexcategory'))->with('status', 'Added product successfully!!'); // sau khi add xong và đã lưu vào table categories sẽ chuyển hướng sang route('indexcategory) rồi hiển thị lên status
        // rồi sau đó ở route('indexcategory') => sẽ có method index sẽ thực hiện các chức năng mà chúng ta đã làm ở method index
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function edit($id)
    {
        $category = category::find($id); // biến category sẽ lưu giá trị tìm $id trong table categories
        // dd($category);
        // $cate = category::all();
        return view('admin.editcategory', compact('category')); // trả ra view editcategory rồi truyền hai tham số category và cate vào view editcategory
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, $id)
    {
        $category = category::find($id); // tìm ID mình sửa(Lấy đối tượng ID từ cơ sở dữ liệu- table category)
        $category->category_name = $request->category_name; // gán giá trị người dùng yêu cầu vào một thuộc tính
        $category->save();
        return redirect(route('indexcategory'))->with('status', 'Updated product successfully!!');
    }

    /**
     * Update the specified resource in storage.
     */


    /**
     */
    public function destroy(string $id)
    {
        category::destroy($id);
        return redirect(route('indexcategory'))->with('status', 'Deleted product successfully!!');
    }
}
