<?php
function waiter(){
  insertT();
  deleteT();
  editT(); 

}
function insertT(){

    if(!empty($_GET['item'])){

        $insert = new insert($_GET['item']);
        if($insert->insertTask()){
            echo'<div class="col-md-9 alert col-md 9 alert-success alert-dismissible fade show" role="alert">
            <strong>SUCCESS</strong> You Inserted Task SUCCESSFULLY.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }else{
            echo '<div class="col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
            <strong>FAILED</strong> You Inserted Task FAILED.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
    }
}

function deleteT(){

  if(!empty($_GET['delete'])){

      $delete = new delete($_GET['delete']);
      if($delete->deleteTask()){
          echo'<div class="col-md-9 alert col-md 9 alert-warning alert-dismissible fade show" role="alert">
          <strong>SUCCESS</strong> You DELETED Task SUCCESSFULLY.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
      }else{
          echo '<div class="col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
          <strong>FAILED</strong> You DELETED Task FAILED.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
      }
  }
}

function editT(){

  if(!empty($_GET['edit'])){

      $edit = new edit($_GET['edit']);
      if($edit->editTask()){
          echo'<div class="col-md-9 alert col-md 9 alert-info alert-dismissible fade show" role="alert">
          <strong>SUCCESS</strong> You completed TASK SUCCESSFULLY.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
      }else{
          echo '<div class="col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
          <strong>FAILED</strong> Task completion FAILED.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
      }
  }
}

function viewTable(){
  $view = new view();
  $view->viewData();
  $view->viewCompletedData();
}

?>