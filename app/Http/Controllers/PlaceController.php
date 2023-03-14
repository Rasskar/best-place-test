<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlaceController extends Controller
{
    /**
     * @var Place
     */
    protected Place $place;

    /**
     * @var Category
     */
    protected Category $category;

    /**
     * PlaceController constructor.
     * @param Place $place
     * @param Category $category
     */
    public function __construct(Place $place, Category $category)
    {
        $this->place = $place;
        $this->category = $category;
    }

    /**
     * @param int $categoryId
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(int $categoryId)
    {
        $places = $this->place::where('category_id', $categoryId)->get()->sortByDesc('id');
        $parentCategories = $this->category::find($categoryId);

        return view('place', [
            'categoryId' => $parentCategories->parent_id,
            'places' => $places,
            'subCategoryId' => $categoryId
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addPlace(Request $request)
    {
        $validator = Validator::make($request->only(["category_id", "title", "comment"]), [
            "category_id" => ["required", "integer"],
            "title" => ["required", "string", "max:50"],
            "comment" => ["nullable", "string", "max:200"]
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator);

        $data = [
            'title' => $request->title,
            'comment' => $request->comment,
            'grade' => $request->grade,
            'category_id' => $request->category_id
        ];

        if ($request->file('img') != null) $data['img'] = '/storage/' . $request->file('img')->store('uploads', 'public');

        $this->place::create($data);

        return redirect()->back();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editPlace(Request $request)
    {
        $validator = Validator::make($request->only(["id", "title", "comment"]), [
            "id" => ["required", "integer"],
            "title" => ["required", "string", "max:50"],
            "comment" => ["nullable", "string", "max:200"]
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator);

        $data = [
            'title' => $request->title,
            'comment' => $request->comment,
            'grade' => $request->grade,
        ];

        if ($request->file('img') != null) $data['img'] = '/storage/' . $request->file('img')->store('uploads', 'public');

        $this->place::find($request->id)->update($data);

        return redirect()->back();
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function deletePlace(int $id)
    {
        $status = $this->place::find($id)->delete();

        return response(['status' => $status]);
    }
}
