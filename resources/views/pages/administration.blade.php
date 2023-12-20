@extends('layouts.app')
@section('title', 'ORRBP | Administration')
@section('content')
    <div class="page p-3">
        <h1 class="page-heading">प्रसाशन व्यवस्थापन प्यानल  </h1>
        <div class="row ml-2">
            <a href="/documents/add-new" class="btn btn-custom-primary" data-toggle="modal" data-target="#newDocumentForm">
                प्रसाशन थप्नुहोस
                <i class="fa-solid fa-file-circle-plus ml-1"></i>
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
                    <th>नाम(नेपाली)
                    </th>
                    <th>नाम(अंग्रेजी)
                        <i class="fa-solid fa-arrow-down ml-1"></i>
                    </th>
                    <th>ठेगाना </th>
                    <th>सेवाग्राही कोड </th>
                    <th>फ्रन्टईन्ड युआरयल </th>
                    <th>ब्याकईन्ड युआरयल</th>
                    <th>स्थिति</th>
                    <th>सम्पादन</th>
                </thead>
                <tbody>
                    <tr>
                        <td data-cell="nepali neame">कागजपत्र शाखा</td>
                        <td data-cell="name english">Department of Documents</td>
                        <td data-cell="address">धादिंग</td>
                        <td data-cell="user code">121Rt7</td>
                        <td data-cell="frontend url">https://www.google.com/inputtools/try/</td>
                        <td data-cell="backend url">https://www.google.com/inputtools/try/</td>
                        <td data-cell="status">True</td>
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
                        <td data-cell="nepali neame">कागजपत्र शाखा</td>
                        <td data-cell="name english">Department of Documents</td>
                        <td data-cell="address">धादिंग</td>
                        <td data-cell="user code">121Rt7</td>
                        <td data-cell="frontend url">https://www.google.com/inputtools/try/</td>
                        <td data-cell="backend url">https://www.google.com/inputtools/try/</td>
                        <td data-cell="status">True</td>
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
                        <a class="page-link" href="#" tabindex="-1">पछिल्लो  </a>
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
                Showing <span>3</span> of <span>20</span> results
            </div>
        </div>
        {{--  New Document Form Modal --}}
        <div class="row">
            <div id="newDocumentForm" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title">थप गर्न चाहेको एडमिनको विबरण पेश गर्नुहोस </h2>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="userId">सेवाग्राही आइडी<span class="text-danger">*</span> </label>
                                        <select id="userId" class="form-control">
                                            <option selected> सेवाग्राही आइडी...</option>
                                            <option >1</option>
                                            <option >2 </option>
                                            <option >3</option>
                                            <option >108</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="status">स्थिति<span class="text-danger">*</span> </label>
                                        <select id="userId" class="form-control">
                                            <option selected>सकृय</option>
                                            <option >निस्कृय</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="userCode">सेवाग्राही कोड <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="userCode" placeholder="सेवाग्राही कोड ">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nameNep">नाम(नेपाली)<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="nameNep" placeholder="नाम(नेपाली)">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="nameEng">नाम(अंग्रेजी)<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="nameEng" placeholder="नाम(अंग्रेजी)">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="address">ठेगाना<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="address" placeholder="ठेगाना">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg">
                                        <label for="frontendUrl">फ्रन्टईन्ड युआरयल <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="frontendUrl" placeholder="फ्रन्टईन्ड युआरयल">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="backendUrl">ब्याकईन्ड युआरयल <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="backendUrl" placeholder="ब्याकईन्ड युआरयल">
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
