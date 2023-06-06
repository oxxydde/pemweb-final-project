<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/resources/" />
  </head>
  <body>
    <form action="" method="post">
        <div class="card">
          <div class="card-body" style="background-color: #e3f2fd">
            <h3 class="card-title">Admin Page</h3>
            <a href="{{ route('admin.resetAntri') }}" style="text-decoration: none"
            style="text-decoration: none">
              <button type="button" class="btn btn-danger mt-lg-4 text-light">Reset</button>
            </a>
            <button type="button" id="refreshBtn" class="btn btn-secondary mt-lg-4 ms-xxl-4 text-light" onclick="location.reload()">Refresh</button>
            <a href="{{ route('admin.logout') }}" style="text-decoration: none"
            style="text-decoration: none">
              <button type="button" class="btn btn-info mt-lg-4 ms-xxl-4 text-light">Logout</button>
            </a>
          </div>
        </div>
    
        <div class="card mt-lg-5">
          <div class="card-body" style="background-color: #e3f2fd">
            <h3 class="card-title">List Antrian</h3>
            <table class="table">
              <thead>
                <tr class="table-info">
                  <th scope="col">No</th>
                  <th scope="col">NIK</th>
                  <th scope="col">Nama Lengkap</th>
                  <th scope="col">Email</th>
                  <th scope="col">No HP</th>
                  <th scope="col">Keperluan</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @for ($i = 0; $i < $data->count(); $i++)
                  <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $data[$i]->nik }}</td>
                    <td>{{ $data[$i]->nama }}</td>
                    <td>{{ $data[$i]->email }}</td>
                    <td>{{ $data[$i]->no_hp }}</td>
                    <td>{{ $keperluan[$data[$i]->keperluan - 1]->keperluan }}</td>
                    <td>{{ $status[$data[$i]->status - 1]->status }}</td>
                    @if ($data[$i]->status == 1)
                      <td>
                        <a href="{{ route('admin.update', ['id' => $i + 1, 'newStatus' => 2]) }}" style="text-decoration: none">
                          <button type="button" class="btn btn-warning me-sm-5">Telah Dilayani</button>
                        </a>
                        <a href="{{ route('admin.update', ['id' => $i + 1, 'newStatus' => 3]) }}" style="text-decoration: none">
                          <button type="button" class="btn btn-danger">Lewati</button>
                        </a>
                      </td>
                    @else
                      <td>
                        <p>Tidak Ada</p>
                      </td>
                    @endif
                  </tr>
                @endfor
              </tbody>
            </table>
          </div>
        </div>
    </form>
  </body>
</html>
