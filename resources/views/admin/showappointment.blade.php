
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
                        <td style="padding: 10px;">Customer Name</td>
                        <td style="padding: 10px;">Email</td>
                        <td style="padding: 10px;">Phone</td>
                        <td style="padding: 10px;">Doctor Name</td>
                        <td style="padding: 10px;">Date</td>
                        <td style="padding: 10px;">Message</td>
                        <td style="padding: 10px;">Status</td>
                        <td style="padding: 10px;">Approved</td>
                        <td style="padding: 10px;">Canceled</td>
                    </tr>
                    @foreach ($appoint as $data)
                    <tr align="center" style="background-color: skyblue; color: black;">
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->doctor }}</td>
                        <td>{{ $data->date }}</td>
                        <td>{{ $data->message }}</td>
                        <td>{{ $data->status }}</td>
                        <td>
                            <a class="btn btn-primary" style="color:black;" href="{{ url('approved_appointment', $data->id) }}">
                            Approved
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-danger" style="color:black;" href="{{ url('calceled_appointment', $data->id) }}">
                                Canceled
                            </a>
                        </td>

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

