
  <div class="container">
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h1 style="text-align:center;color:green">ADD NEW TYPE_PRODUCT</h1>
    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" id="" class="form-control">
        <label for="">ID_Type</label>
        <input type="text" name="id_type" id="" class="form-control">
        <label for="">Description</label>
        <input type="text" name="description" id="" class="form-control">
        <label for="">Unit_Price</label>
        <input type="text" name="unit_price" id="" class="form-control">
        <label for="">Promotion_Price</label>
        <input type="text" name="promotion_price" id="" class="form-control">
        <label for="">Image</label>
        <input type="file" class="form-control-file" id="" name="image_file" placeholder="" onchange="changeImage(event)">
        <img id="image" src="" class="img-thumnail" style="width:10rem" alt=""><br>
            <script type="text/javascript">
                const  changeImage=(e)=>{
                    const img=document.getElementById('image');
                    const file=e.target.files[0]
                    img.src=URL.createObjectURL(file);
                }
            </script>
        <label for="">Unit</label>
        <input type="text" name="unit" id="" class="form-control">
        <label for="">NEW</label>
        <input type="text" name="new" id="" class="form-control">

            </div>
        <input name="btnSave" id="" class="btn btn-primary" type="submit" value="Lưu">
    </div>
    </div>
    </form>
    </div>