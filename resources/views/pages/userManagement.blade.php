@extends('layouts.app')
@section('title', 'ORRBP | Admin Management')
@section('content')
    <div class="page p-3">
        <h1 class="page-heading">प्रयोगकर्ताहरुको बिवरण सुची</h1>
        <div class="row ml-2">
            <a href="/documents/add-new" class="btn btn-custom-primary" data-toggle="modal" data-target="#newDocumentForm">
                प्रयोगकर्ता थप्नुहोस
                <i class="fa-solid fa-user-plus ml-1"></i>
            </a>
        </div>
        <div class="data-view-table">
            {{-- Select Number of Results and Search --}}
            <div class="row select-search">
                <select class="custom-select" data-bs-toggle="tooltip" data-bs-placement="top" title="No of Results">
                    <option value="1" selected>4</option>
                    <option value="2">10</option>
                    <option value="3">100</option>
                </select>
                {{-- Search --}}
                <form class="form-inline ml-3 mt-3 searchbar">
                    <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" placeholder="यहाँ खोज्नुहोस्...">
                    </div>
                </form>
            </div>

            {{-- Main Data Table --}}
            <table class="table">
                <thead>
                    <tr>
                        <th>पहिलो नाम
                            <i class="fa-solid fa-arrow-down ml-1"></i>
                        </th>
                        <th>थर</th>
                        <th>ईमेल</th>
                        <th>लिङ्ग</th>
                        <th>भूमिका</th>
                        <th>कार्य</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-cell="user first name">विवेक</td>
                        <td data-cell="surname">श्रेष्ठ</td>
                        <td data-cell="email">orrbp@demo.com</td>
                        <td data-cell="sex">पुरुष</td>
                        <td data-cell="role">एडमिन</td>
                        <td data-cell="function">कार्य</td>
                    </tr>
                    <tr>
                        <td data-cell="user first name">विवेक</td>
                        <td data-cell="surname">श्रेष्ठ</td>
                        <td data-cell="email">orrbp@demo.com</td>
                        <td data-cell="sex">पुरुष</td>
                        <td data-cell="role">एडमिन</td>
                        <td data-cell="function">कार्य</td>
                    </tr>
                    <tr>
                        <td data-cell="user first name">विवेक</td>
                        <td data-cell="surname">श्रेष्ठ</td>
                        <td data-cell="email">orrbp@demo.com</td>
                        <td data-cell="sex">पुरुष</td>
                        <td data-cell="role">एडमिन</td>
                        <td data-cell="function">कार्य</td>
                    </tr>
                    <tr>
                        <td data-cell="user first name">विवेक</td>
                        <td data-cell="surname">श्रेष्ठ</td>
                        <td data-cell="email">orrbp@demo.com</td>
                        <td data-cell="sex">पुरुष</td>
                        <td data-cell="role">एडमिन</td>
                        <td data-cell="function">कार्य</td>
                    </tr>

                </tbody>
            </table>

        </div>

        {{-- Pagination and  Number of Results --}}
        <div class="row page-notation">
            {{-- Pagination --}}
            <nav aria-label="table pagination">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">पछिल्लो </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">अर्को</a>
                    </li>
                </ul>
            </nav>

            <div>
                Showing <span>4</span> of <span>6</span> results
            </div>
        </div>
        {{--  New Document Form Modal --}}
        <div class="row">
            <div id="newDocumentForm" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title">प्रयोगकर्ताको विबरण पेश गर्नुहोस</h2>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="fistName">पहिलो नाम<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="fistName" placeholder="पहिलो नाम">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="adminSurname">थर <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="adminSurname"
                                            placeholder="प्रयोगकर्ताको थर">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email">ईमेल<span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="example@demo.com">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="password">पासवर्ड<span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="पासवर्ड">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="contact">सम्पर्क<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="contact" placeholder="सम्पर्क">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="selectGender">लिङ्ग<span class="text-danger">*</span></label>
                                        <select id="selectGender" class="form-control">
                                            <option selected>लिङ्ग</option>
                                            <option value="male">पुरुष</option>
                                            <option value="female">महिला </option>
                                            <option value="others">अन्य</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="status" id="status">
                                        <label for="status ml-2">सकृय छ</label>
                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>
                                {{-- Button to submit and close modal --}}
                                <div class="row justify-content-end">
                                    <button type="submit" class="btn btn-custom-primary mr-1">पेश गर्नुहोस</button>
                                    <button class="btn btn-custom-primary" id="btn-close" role="button">रद्द गर्नुहोस
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
