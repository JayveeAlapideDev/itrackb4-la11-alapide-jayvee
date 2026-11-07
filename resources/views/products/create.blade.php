@extends('layouts.app')

@section('title','Add Product')

@section('content')
   <form action="{{ route('products.store') }}" method="POST">
    @csrf
    @method('POST')
         <div class="mb-3">
            <lable class="form-label" for="name">Name</lable>
            <input type="text" name="name" class="form-control"value="{{ old('name') }}">
            @error('name')
               <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
         <div class="mb-3">
            <lable class="form-label" for="price">Price</lable>
            <input type="number" name="price" class="form-control" value="{{  old('price') }}">
          @error('price')
               <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
           <div class="mb-3">
            <lable class="form-label" for="stock">Stock</lable>
            <input type="number" name="stock" class="form-control" value="{{  old('stock') }}">
          @error('stock')
               <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
            </div>

              <div class="mb-3">
         <label class="form-label" for="brand_id">Brand</label>
         <select name="brand_id" id="brand_id" class="form-select">
            <option value="">Select Brand</option>
            @foreach ($brands as $brand)
                <option value="{{ $brand->id }}"
                    @selected(old('brand_id') == $brand->id)
                >{{ $brand->name }}</option>
            @endforeach
         </select>
          @error('brand_id')
               <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
       </div>
         <div class="mb-3">
         <lable class="form-label" for="package">package</lable>
         <select name="package" class="form-select">
            <option value="">Select Package</option>
            <option value="bottle" @selected(old('package')== 'bottle')>BOTTLE</option>
            <option value="plastic" @selected(old('package')== 'plastic')>PLASTIC</option>
            <option value="pack" @selected(old('package')== 'pack')>PACK</option>
            <option value="sachet" @selected(old('package')== 'sachet')>SACHET</option>
            <option value="stick" @selected(old('package')== 'stick')>STICK</option>
         </select>
          @error('package')
               <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
            <button type="submit" class="btn btn-primary">Save</button>

            <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
        </form>



       @endsection