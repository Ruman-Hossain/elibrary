@extends('layouts.navbar')
@section('content')
<div class="content-wrapper">
  <div class="container">
    <div class="row pad-botm">
      <div class="col-md-12">
        <h4 class="header-line"  style="color:white;">Manage Contents</h4>
      </div>
    </div>
    <div class="row">
      <div>
        <div class="panel panel-default">
          <a href="{{Route('content.create')}}"><button class="btn btn-success"><i class="fa fa-plus "></i> Add New</button></a>
        </div>
      </div>
    </div>
    <div class="row">
      <div>
        <!-- Advanced Tables -->
        <div class="panel panel-default">
          <div class="panel-heading">
            Content Listing
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="col-md-12 table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Sub Category</th>
                    <th>Content Name</th>
                    <th>Author</th>
                    <th>Edition</th>
                    <th>Session</th>
                    <th>Submitted By</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>                                     
                  <tr class="odd gradeX">
                    <td class="center"></td>
                    <td class="center"></td>
                    <td class="center"></td>
                    <td class="center"></td>
                    <td class="center"></td>
                    <td class="center"></td>
                    <td class="center"></td>
                    <td class="center"></td>
                    <td class="center" style="width:28%">
                      <a href="" target="_blank"><button class="btn btn-primary"><i class="fa fa-eye "></i> View</button>
                        <a href=""><button class="btn btn-success"><i class="fa fa-edit "></i> Edit</button> 
                          <a href="" onclick="return confirm('Are you sure you want to delete?');" >  <button class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</button>
                          </td>
                        </tr>                                     
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
              <!--End Advanced Tables -->
            </div>
          </div>
        </div>
      </div>
      @endsection