<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post Your Recipe') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-10" >
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <details>
                    <summary>New Recipe</summary>
                <form action="{{url('upload_post')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div style="padding: 20px">
                        <label>Name</label>
                        <input type="text" name='name'style="padding-right: 50px;margin-left:35px">
                        </div>

                        <div style="padding: 20px">
                        <label>Category</label>
                        <select class="custom-select col-sm-10" name='category'style='margin-left:15px'>
                            <option selected value="Easy">Easy</option>
                            <option value="Moderate">Moderate</option>
                            <option value="Hard">Hard</option>
                          </select>
                        </div>

                        <div style="padding: 20px">
                        <label>Recipe</label>
                        <textarea type="text" name='recipe' style="margin-left:35px;width: 600px; height: 400px"></textarea>
                        </div>

                        <div style="padding: 20px">
                        <label>Instructions</label>
                        <textarea type="text" name='instructions' style="width: 600px; height: 600px"></textarea>
                        </div>
            
                        <div style="padding: 20px">
                        <label>Image</label>
                        <input type="file" name='image'style="margin-left:35px">
                        </div>

                        <div style="padding: 20px">
                            <input type="submit" style="background: aqua; cursor:pointer;border-radius:5px;font-weight:500;margin-left:320px;padding: 15px">
                        </div>
                </form>
            </details>
            </div>
        </div>
    </div>
      
      
</x-app-layout>

