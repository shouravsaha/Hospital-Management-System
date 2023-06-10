
<!DOCTYPE html>
<html lang="en">
  <head>

    {{-- all css files are including css file --}}
    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">

      {{-- including sidebar section --}}
      @include('admin.sidebar')


        <!-- partial:partials/_navbar.html -->

        {{-- including navbar section --}}
        @include('admin.navbar')

        {{-- including body section --}}
        <div class="container-fluid page-body-wrapper">
            <div align = "center" style="padding-top: 100px;">
                <table>
                    <tr style="background-color: black;">
                        <td style="padding: 10px;">Doctor Name</td>
                        <td style="padding: 10px;">Phone</td>
                        <td style="padding: 10px;">speciality</td>
                        <td style="padding: 10px;">Room No</td>
                        <td style="padding: 10px;">Image</td>
                        <td style="padding: 10px;">Update</td>
                        <td style="padding: 10px;">Delete</td>

                    @foreach ($doctors as $data)
                    <tr align="center" style="background-color: skyblue; color: black;">
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->speciality }}</td>
                        <td>{{ $data->room }}</td>
                        <td><img width="100" height="100" src="doctorimage/{{ $data->image }}" alt=""></td>
                        <td><a class="btn btn-primary" href="{{ url('update_doctor', $data->id) }}">Update</a></td>
                        <td><a onclick="return confirm('are you sure to delete this doctor this')" class="btn btn-danger" href="{{ url('delete_doctor', $data->id) }}">Delete</a></td>
                        <td></td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>


      <!-- page-body-wrapper ends -->

    <!-- container-scroller -->
    <!-- plugins:js -->

    {{-- including all script file --}}
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
