  @extends('layouts.layouts')

  @section('content')

      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Territories</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Territories</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title">Territories</h3>
                  </div>
                </div>
                <div class="card-body">

                  <ul id="myUL">
                    
                    @foreach ($territories as $value)
                    <li>
                    <span class="caret">{{ $value->name }}</span>
                  
                    <ul class="nested">
                      @if (count($value->children) > 0)
                      @include('account.sub-territories',['childs' => $value->children])
                    @endif
                  </li>
                    </ul>
                
                    @endforeach
                  
                </ul>
                <script>
                    var toggler = document.getElementsByClassName("caret");
                    var i;
                    for (i = 0; i < toggler.length; i++) {
                        toggler[i].addEventListener("click", function () {
                            this.parentElement.querySelector(".nested").classList.toggle("active");
                            this.classList.toggle("caret-down");
                        });
                    }
                </script>
                </div>
              </div>
              <!-- /.card -->
            </div>
      
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
  
  @endsection