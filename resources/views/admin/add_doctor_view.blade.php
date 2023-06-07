
<!DOCTYPE html>
<html lang="en">
  <head>

    {{-- all css files are including css file --}}
    @include('admin.css')

    <style>
        label{
            width: 200px;
        }
    </style>

  </head>
  <body>
    <div class="container-scroller">

        {{-- including sidebar section --}}
        @include('admin.sidebar')

        <!-- partial:partials/_navbar.html -->

        {{-- including navbar section --}}
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center" style="padding-top: 100px;">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                    <button type="button" class="close" data-dismiss="alert">X</button>
                </div>
                @endif
                <form action="{{ url('upload_doctor_data') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div style="padding: 15px;">
                        <label for="doctor name">Doctor Name</label>
                        <input type="text" name="name" style="color:black" placeholder="Write the name" required>
                    </div>

                    <div style="padding: 15px;">
                        <label for="Phone">Phone</label>
                        <input type="number" name="phone" style="color:black" placeholder="Write the Phone number" required>
                    </div>

                    <div style="padding: 15px;">
                        <label for="doctor speciality">Speciality</label>
                        <select name="speciality" style="color: black; width: 200px;" required>
                            <option>--Select--</option>
                            <option value="skin">skin</option>
                            <option value="heart">heart</option>
                            <option value="eye">eye</option>
                            <option value="nose">nose</option>
                        </select>
                    </div>

                    <div style="padding: 15px;">
                        <label for="doctor name">Room No</label>
                        <input type="text" name="room" style="color:black" placeholder="Write the room number" required>
                    </div>

                    <div style="padding:15px">
                        <label for="image">Doctor Image</label>
                        <input type="file" name="image" required>
                    </div>

                    <div style="padding:15px">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>


        {{-- including all script file --}}
        @include('admin.script')
        <!-- End custom js for this page -->
  </body>
</html>
