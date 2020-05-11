@extends('layouts.adminmaster')

@section('content')
<section class="content-header">
    <h1>
      Student
      <small>Student Content Update</small>
    </h1>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Student</li>
  </ol>
</section> <br><br>
<div class="row">
  <div class="col-md-1">

  </div>

  <div class="col-md-10">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">General Elements</h3>
      </div><!-- /.box-header -->
      <div class="box-body">
        <form role="form">
          <!-- text input -->
          <div class="form-group">
            <label>Text</label>
            <input type="text" class="form-control" placeholder="Enter ..." />
          </div>
          <!-- textarea -->
          <div class="form-group">
            <label>Textarea</label>
            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
          </div>

          <!-- checkbox -->
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" />
                Checkbox 1
              </label>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" />
                Checkbox 2
              </label>
            </div>
          </div>

          <!-- radio -->
          <div class="form-group">
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked />
                Option one is this and that&mdash;be sure to include why it's great
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" />
                Option two can be something else and selecting it will deselect option one
              </label>
            </div>
          </div>

          <!-- select -->
          <div class="form-group">
            <label>Select</label>
            <select class="form-control">
              <option>option 1</option>
              <option>option 2</option>
              <option>option 3</option>
              <option>option 4</option>
              <option>option 5</option>
            </select>
          </div>

          <!-- Select multiple-->
          <div class="form-group">
            <label>Select Multiple</label>
            <select multiple class="form-control">
              <option>option 1</option>
              <option>option 2</option>
              <option>option 3</option>
              <option>option 4</option>
              <option>option 5</option>
            </select>
          </div>

        </form>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!--/.col (right) -->
</div>


@endsection
