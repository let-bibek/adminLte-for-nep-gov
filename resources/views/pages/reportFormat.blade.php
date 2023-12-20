@extends('layouts.app')
@section('title', 'ORRBP | Report Format')
@section('content')
    <div class="page p-3">
        <h1 class="page-heading">ढाँचाको प्रकारको सुची </h1>
        <div class="row ml-2">
            <a href="/documents/add-new" class="btn btn-custom-primary" data-toggle="modal" data-target="#newDocumentForm">
                ढाँचा थप्नुहोस
                <i class="fa-solid fa-plus ml-1"></i>
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
                        <th>ढाँचाको प्रकारको नाम
                            <i class="fa-solid fa-arrow-down ml-1"></i>
                        </th>
                        <th>ढाँचाको बिवरण </th>
                        <th>कार्य</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-cell="report format name">ढाँचाको प्रकार</td>
                        <td data-cell="report description">ढाँचाको बिवरण</td>
                        <td data-cell="function">कार्य</td>
                    </tr>
                    <tr>
                        <td data-cell="report format name">ढाँचाको प्रकार</td>
                        <td data-cell="report description">ढाँचाको बिवरण</td>
                        <td data-cell="function">कार्य</td>
                    </tr>
                    <tr>
                        <td data-cell="report format name">ढाँचाको प्रकार</td>
                        <td data-cell="report description">ढाँचाको बिवरण</td>
                        <td data-cell="function">कार्य</td>
                    </tr>
                    <tr>
                        <td data-cell="report format name">ढाँचाको प्रकार</td>
                        <td data-cell="report description">ढाँचाको बिवरण</td>
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
                            <h2 class="modal-title">ढाँचाको प्रकार पेश गर्नुहोस</h2>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-row">
                                    <label for="selectGender mr-4">ढाँचाको लागि प्रकार छान्नुहोस्<span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <select id="selectGender" class="form-control">
                                            <option selected>-</option>
                                            <option value="sanstha">संस्था</option>
                                            <option value="company">कम्पनी </option>
                                            <option value="upabhoktaSamiti">उपभोक्ता समिति</option>
                                            <option value="tolBikashSamiti">टोल विकाश समिति</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- Text Editor --}}
                                <div class="form-row">
                                    <section class="content">
                                        <div class="card-body pad">
                                            <div class="mb-3">
                                                <textarea class="textarea" placeholder="Place some text here"
                                                    style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="dropdown-divider"></div>
                                {{-- Button to submit and close modal --}}
                                <div class="row justify-content-end">
                                    <button type="submit" class="btn btn-custom-primary mr-1">पेश गर्नुहोस</button>
                                    <button class="btn btn-custom-primary" id="btn-close">रद्द गर्नुहोस
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
