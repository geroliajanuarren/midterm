<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Manage Employees</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
<div class="container" style="width: 1250px;">
    <div class="table-wrapper">
        <div class="table-title ">
            <div class="row ">
                <div class="col-sm-6 ">
                    <h2>Manage <b>Employees</b></h2>
                </div>

                <div class="col-sm-6">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead style="color: black">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Birthdate</th>
                    <th>Gender</th>
                    <th>Civil Status</th>
                    <th>Address</th>
                    <th>Municipality</th>
                    <th>Contact Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="employeeTableBody">
                @foreach($info as $item)
                    <tr>
                        <td>{{ $item->name }}</td>      
                        <td>{{ $item->email }}</td>      
                        <td>{{ $item->age }}</td>      
                        <td>{{ $item->birthdate }}</td>      
                        <td>{{ $item->gender }}</td>      
                        <td>{{ $item->civil_status }}</td>      
                        <td>{{ $item->address }}</td>      
                        <td>{{ $item->municipality }}</td>      
                        <td>{{ $item->contact_number }}</td> 
                        <td>
                            <a href='#' class='edit' data-toggle='modal' data-target='#editEmployeeModal' title='Edit' data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a>
                            <a href='#' class='delete' title='Delete' data-toggle='tooltip' ><i class='material-icons'>&#xE872;</i></a>
                        </td>      
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="addEmployeeForm" method="post" action="{{ url('/add') }}" >
                    @csrf
                    <div class="modal-header">                       
                        <h4 class="modal-title">Add Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">  
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="number" name="age" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Birthdate</label>
                            <input type="date" name="birthdate" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="form-control" required>
                                <option value="" disabled selected>--Choose--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Civil Status</label>
                            <select name="civil_status" class="form-control" required>
                                <option value="" disabled selected>--Choose--</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Engage">Engaged</option>
                                <option value="Widow">Widow</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Municipality</label>
                            <select name="municipality" class="form-control" required>
                                <option value="" disabled selected>--Choose--</option>
                                <option value="Barcelona">Barcelona</option>
                                <option value="Bulan">Bulan</option>
                                <option value="Bulusan">Bulusan</option>
                                <option value="Casiguran">Casiguran</option>
                                <option value="Castilla">Castilla</option>
                                <option value="Donsol">Donsol</option>
                                <option value="Gubat">Gubat</option>
                                <option value="Irosin">Irosin</option>
                                <option value="Juban">Juban</option>
                                <option value="Magallanes">Magallanes</option>
                                <option value="Matnog">Matnog</option>
                                <option value="Pilar">Pilar</option>
                                <option value="Prieto Diaz">Prieto Diaz</option>
                                <option value="Sorsogon City">Sorsogon City</option>
                                <option value="Sta. Magdalena">Sta. Magdalena</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="tel" name="contact_number" class="form-control" required>
                        </div>                   
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editEmployeeForm" action="{{ url('/update_records') }}" method="post">
                    <div class="modal-header">                       
                        <h4 class="modal-title">Edit Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">               
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $info->name }}"required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $info->email }}" required>
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="number" name="age" class="form-control" value="{{ $info->age }}" required>
                        </div>
                        <div class="form-group">
                            <label>Birthdate</label>
                            <input type="date" name="birthdate" class="form-control" value="{{ $info->birthdate }}" required>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="form-control" value="{{ $info->gender }}" required>
                                <option value="" disabled selected >--Choose--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Civil Status</label>
                            <select name="civil_status" class="form-control" value="{{ $info->civil_status }}" required>
                                <option value="" disabled selected>--Choose--</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Engage">Engaged</option>
                                <option value="Widow">Widow</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control" value="{{ $info->address }}" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Municipality</label>
                            <select name="municipality" class="form-control" value="{{ $info->municipality }}" required>
                                <option value="" disabled selected>--Choose--</option>
                                <option value="Barcelona">Barcelona</option>
                                <option value="Bulan">Bulan</option>
                                <option value="Bulusan">Bulusan</option>
                                <option value="Casiguran">Casiguran</option>
                                <option value="Castilla">Castilla</option>
                                <option value="Donsol">Donsol</option>
                                <option value="Gubat">Gubat</option>
                                <option value="Irosin">Irosin</option>
                                <option value="Juban">Juban</option>
                                <option value="Magallanes">Magallanes</option>
                                <option value="Matnog">Matnog</option>
                                <option value="Pilar">Pilar</option>
                                <option value="Prieto Diaz">Prieto Diaz</option>
                                <option value="Sorsogon City">Sorsogon City</option>
                                <option value="Sta. Magdalena">Sta. Magdalena</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="tel" name="contact_number" class="form-control" value="{{ $info->contact_number }}"required>
                        </div>                   
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
</body>
</html>