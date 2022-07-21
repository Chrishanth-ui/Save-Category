<div>
    <div class="container" style="margin-top: 40px;">

        <!--Code to dispaly the add button and the h2 tag in below div-->

        <div class="d-flex justify-content-center">
            <!--Table title-->
            <h2 class="">Category Table</h2>
        </div>

        <!--Add button showfrom function and text div-->
        <div class="d-flex justify-content-end">
            <h6 class="mt-2"> Add a new Cateory here </h6>
            <button class="btn btn-primary ml-3" wire:click='addNew'>Create</button>
        </div>



        <!--Code to dispaly the data in table from DB below-->
        <div class="d-flex justify-content-end mt-5 " style="padding-left:40px;">
            <input class="border border-primary" style="border-radius: 25px;" type="text" placeholder="  Search"
                wire:model="search_key">
        </div>

        <div class="table-responsive mt-2" style="display: grid;
                                          text-align: center;">
            <table class="table table-bordered" style="border:1px solid blue;">
                <thead>
                    <tr class="bg-dark text-white" style=" text-align: center;">
                        <!--column names-->
                        <th>No</th>
                        <th style="width:43%">Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($count = 1)
                    @foreach ($list_data as $row )
                        
                   
                    <!--Code to dispaly the insert data form section below-->
                    <tr>
                        <td>{{ $count }}</td>
                        <td>{{ $row->name}}</td>
                        <td>
                            <!--Edit button with edit function in insert.php-->
                            <button class="btn btn-success ml-5 rounded" wire:click='updateData({{ $row->id }})'>Edit</button>
                            <!--Delete button with delete function in insert.php-->
                            <button  class="btn btn-danger ml-4 rounded" wire:click='showDelete({{ $row->id }})'>Delete</button>
                        </td>
                    </tr>
                    @php($count++)
                    @endforeach
                </tbody>
            </table>
        </div>



        {{-- delete model --}}
        <div>
            <div class="row mt-5">
                <div class="col-md-6 offset-3">
                    <div class="modal fade" id="delete" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true close-btn">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you wanna delete?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary close-btn"
                                        data-dismiss="modal">Cancel</button>
                                    <button type="button" wire:click='deleteData' class="btn btn-danger close-modal">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        {{-- create model --}}
        <div>
            <div class="row mt-5">
                <div class="col-md-6 offset-3">
                    <div wire:ignore.self class="modal fade" id="form" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Type category
                                                name:</label>
                                            <input type="text" wire:model="new_name" class="form-control" id="recipient-name">
                                        </div>
                                        {{-- {{$new_name}} --}}
                                        {{-- <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div> --}}
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" wire:click="saveData" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        {{-- update model --}}
        <div>
          <div class="row mt-5">
              <div class="col-md-6 offset-3">
                  <div wire:ignore.self class="modal fade" id="modelUpdate" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                                  <button type="button" class="close" data-dismiss="modal"
                                      aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                  <form>
                                      <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">update category
                                              name:</label>
                                          <input type="text" wire:model="new_name" class="form-control" id="recipient-name">
                                      </div>
                                      {{$new_name}}
                                      {{-- <div class="form-group">
          <label for="message-text" class="col-form-label">Message:</label>
          <textarea class="form-control" id="message-text"></textarea>
        </div> --}}
                                  </form>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" wire:click="saveData" class="btn btn-primary">Save</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </div>



    </div>
  </div>

