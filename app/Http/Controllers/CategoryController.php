<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * @var Category
     */
    protected Category $category;

    /**
     * CategoryController constructor.
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $categories = $this->category::where('parent_id', null)->get()->sortByDesc('id');

        return view('categories', compact('categories'));
    }


    /**
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function subCategory(int $id)
    {
        $subCategories = $this->category::where('parent_id', $id)->get()->sortByDesc('id');

        return view('sub_categories', ['subCategories'=>$subCategories, 'categoryId'=>$id]);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addCategory(Request $request)
    {
        $validator = Validator::make($request->only(["name", "description"]), [
            "name" => ["required", "string", "max:50"],
            "description" => ["nullable", "string"],
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator);

        $data = [
            'name' => $request->name,
            'description' => $request->description
        ];

        if (!empty($request->parent_id)) $data['parent_id'] = $request->parent_id;

        $this->category::create($data);

        return redirect()->back();
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editCategory(Request $request)
    {
        $validator = Validator::make($request->only(["id", "name", "description"]), [
            "id" => ["required", "integer"],
            "name" => ["required", "string", "max:50"],
            "description" => ["nullable", "string"],
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator);

        $this->category::find($request->id)->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->back();
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function deleteCategory(int $id)
    {
        $status = $this->category::find($id)->delete();

        return response(['status' => $status]);
    }
}
