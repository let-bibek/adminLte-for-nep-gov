@extends('layouts.app')
@section('title', 'ORRBP | Admin Management')
@section('content')
    <div class="page p-3">
        <h1 class="page-heading">प्रसाशन व्यबस्थापन प्यानल</h1>
        <div class="row ml-2">
            <a href="/documents/add-new" class="btn btn-custom-primary" data-toggle="modal" data-target="#newDocumentForm">
                प्रसाशन प्रयोगकर्ता थप्नुहोस
                <i class="fa-solid fa-user-plus ml-1"></i>
            </a>
        </div>
        <div class="data-view-table">
            {{-- Select Number of Results and Search --}}
            <div class="row select-search">
                <select class="custom-select" data-bs-toggle="tooltip" data-bs-placement="top" title="No of Results">
                    <option value="1" selected>3</option>
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
                        <th>प्रसाशन</th>
                        <th>एडमिन नाम
                            <i class="fa-solid fa-arrow-down ml-1"></i>
                        </th>
                        <th>थर</th>
                        <th>ईमेल</th>
                        <th>सम्पर्क</th>
                        <th>लिङ्ग</th>
                        <th>सम्पादन</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td data-cell="department name">कागजपत्र शाखा</td>
                        <td data-cell="name">विवेक</td>
                        <td data-cell="surname">श्रेष्ठ</td>
                        <td data-cell="email">orrbp@demo.com</td>
                        <td data-cell="contact">9812345678</td>
                        <td data-cell="sex">Male</td>
                        <td data-cell="update">
                            <i class="fa-solid fa-eye text-primary mr-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="View"></i>
                            <i class="fa-solid fa-pen-to-square mr-2 text-warning" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Update"></i>
                            <i class="fa-solid fa-trash mr-2 text-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Delete"></i>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell="department name">कागजपत्र शाखा</td>
                        <td data-cell="name">रमेश </td>
                        <td data-cell="surname">ग्याँवाली</td>
                        <td data-cell="email">orrbp@demo.com</td>
                        <td data-cell="contact">9812345678</td>
                        <td data-cell="sex">Male</td>
                        <td data-cell="update">
                            <i class="fa-solid fa-eye text-primary mr-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="View"></i>
                            <i class="fa-solid fa-pen-to-square mr-2 text-warning" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Update"></i>
                            <i class="fa-solid fa-trash mr-2 text-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Delete"></i>
                        </td>
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
                Showing <span>2</span> of <span>2</span> results
            </div>
        </div>
        {{--  New Document Form Modal --}}
        <div class="row">
            <div id="newDocumentForm" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title">थप गर्न चाहेको प्रसाशन प्रयोगकर्ताको विबरण पेश गर्नुहोस</h2>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="adminName">नाम <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="adminName"
                                            placeholder="प्रयोगकर्ताको नाम">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="adminSurname">थर <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="adminSurname"
                                            placeholder="प्रयोगकर्ताको थर">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="adminContact">सम्पर्क <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="adminContact"
                                            placeholder="सम्पर्क">
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
                                    <div class="form-group col-md-4">
                                        <label for="status">स्थिति<span class="text-danger">*</span></label>
                                        <select id="status" class="form-control">
                                            <option value="active">सकृय</option>
                                            <option value="inactive">निस्कृय</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="email">ईमेल<span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="example@demo.com">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="password">पासवर्ड <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="पासवर्ड ">
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
