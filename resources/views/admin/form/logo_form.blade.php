@extends('admin.layout')
@section('title')
    Logo | Form
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="card">
                <div class="table-responsive">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Logo Type</th>
                                <th>Button List</th>
                                <th>Font</th>
                                <th>Websites</th>
                                <th>Hear About us</th>
                                <th>Additional needs</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Company</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($logo_form as $w)
                                <tr>
                                    <td>{{ $w['stape_1'] ?? 'N/A' }}</td>
                                    <td>{{ $w['company_description'] ?? 'N/A' }}</td>
                                    <td>{{ implode(', ', $w['font_selection'] ?? []) }}</td>
                                    <td>{{ $w['websites'] ?? 'N/A' }}</td>
                                    <td>{{ implode(', ', $w['source_7'] ?? []) }}</td>
                                    <td>{{ implode(', ', $w['additional_needs'] ?? []) }}</td>
                                    <td>{{ $w['first_name'] ?? 'N/A' }}</td>
                                    <td>{{ $w['last_name'] ?? 'N/A' }}</td>
                                    <td>{{ $w['phone_number'] ?? 'N/A' }}</td>
                                    <td>{{ $w['email'] ?? 'N/A' }}</td>
                                    <td>{{ $w['company'] ?? 'N/A' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Logo Type</th>
                                <th>Button List</th>
                                <th>Font</th>
                                <th>Websites</th>
                                <th>Hear About us</th>
                                <th>Additional needs</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Company</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    © Velzon.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
