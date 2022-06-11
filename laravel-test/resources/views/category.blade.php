<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category Multilevel</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <!-- Category form group -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            Category
          </div>

          <div class="card-body">
            <form action="{{ route('category') }}" method="POST">
              @csrf
              <div class="form-group row">
                <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                  <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}" required autofocus>

                  @error('category')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="parent" class="col-md-4 col-form-label text-md-right">
                  {{ __('Parent Category') }}
                </label>

                <div class="col-md-6">
                  <select id="parent" class="form-control @error('parent') is-invalid @enderror" name="parent" value="{{ old('parent') }}" autofocus>
                    <option value="none">No any parents</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                      {{ $category->name }}
                    </option>
                    @endforeach
                  </select>
                  @error('parent')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Save Category') }}
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>