@extends('layouts.app')
@section('title', 'ORRBP | Upabhokta Samiti')
@section('content')
    <div class="page p-3">

        <div class="row mt-2 ">
            <div class="col-lg-3 col-6  card-info">
                <div class="small-box">
                    <div class="inner text-white">
                        <h3>15</h3>

                        <p>प्रकृया बाँकी</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <a href="#" class="small-box-footer">पुरा हेर्नुहोस् <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6 card-info">
                <div class="small-box">
                    <div class="inner text-white">
                        <h3>4</h3>

                        <p>रद्द भएको </p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-ban"></i>
                    </div>
                    <a href="#" class="small-box-footer">पुरा हेर्नुहोस् <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6 card-info">
                <div class="small-box ">
                    <div class="inner text-white">
                        <h3>8</h3>

                        <p>प्रक्रियामा रहेको </p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-hourglass-half"></i>
                    </div>
                    <a href="#" class="small-box-footer">पुरा हेर्नुहोस् <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6 card-info">
                <div class="small-box">
                    <div class="inner text-white">
                        <h3>12</sup></h3>

                        <p>स्वीकृत भएको </p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-clipboard-list"></i>
                    </div>
                    <a href="#" class="small-box-footer">पुरा हेर्नुहोस् <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6 card-info">
                <div class="small-box">
                    <div class="inner text-white">
                        <h3>70</h3>

                        <p>सम्पन्न भएको </p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <a href="#" class="small-box-footer text-black">पुरा हेर्नुहोस् <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between ml-2">
            <a href="/documents/add-new" class="btn btn-custom-primary" data-toggle="modal" data-target="#newDocumentForm">
                थप्नुहोस
                <i class="fa-solid fa-user-plus ml-1"></i>
            </a>
            <div class="dropdown">
                <button class="btn btn-custom-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    एक्सपोर्ट गर्नुहोस <i class="fa-solid fa-file-export ml-2"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-pdf mr-1"></i>PDF</a></li>
                    <li><a class="dropdown-item" href="#"> <i class="fa-solid fa-file-excel mr-1"></i>EXCEL</a></li>
                    <li><a class="dropdown-item" href="#"> <i class="fa-solid fa-file-word mr-1"></i>DOCS</a></li>
                </ul>
            </div>

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
                        <th>दर्ता नम्वर
                            <i class="fa-solid fa-arrow-down ml-1"></i>
                        </th>
                        <th>बैंकको नाम</th>
                        <th>एकाउन्ट नम्वर</th>
                        <th> प्रदेश</th>
                        <th>जिल्ला</th>
                        <th>स्तिथि</th>
                        <th>कार्य</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-cell="registration number">12345454545</td>
                        <td data-cell="bank name">राष्ट्रिय वाणिज्य बैंक</td>
                        <td data-cell="account number">123456978789625896</td>
                        <td data-cell="state">बागमती</td>
                        <td data-cell="district">धादिंग </td>
                        <td data-cell="status">निस्कृय </td>
                        <td data-cell="function">कार्य</td>
                    </tr>
                    <tr>
                        <td data-cell="registration number">12345454545</td>
                        <td data-cell="bank name">राष्ट्रिय वाणिज्य बैंक</td>
                        <td data-cell="account number">123456978789625896</td>
                        <td data-cell="state">बागमती</td>
                        <td data-cell="district">धादिंग </td>
                        <td data-cell="status">निस्कृय </td>
                        <td data-cell="function">कार्य</td>
                    </tr>
                    <tr>
                        <td data-cell="registration number">12345454545</td>
                        <td data-cell="bank name">राष्ट्रिय वाणिज्य बैंक</td>
                        <td data-cell="account number">123456978789625896</td>
                        <td data-cell="state">बागमती</td>
                        <td data-cell="district">धादिंग </td>
                        <td data-cell="status">निस्कृय </td>
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
        {{--  New Registration Form Modal --}}
        <div class="row">
            <div id="newDocumentForm" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title">उपभोक्ता समितिको दर्ता फारम</h2>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="samitiName">उपभोक्ता समितिको नाम <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="samitiName"
                                            placeholder="उपभोक्ता समितिको नाम ">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="regNum">दर्ता नम्बर <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="regNum"
                                            placeholder="दर्ता नम्बर ">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="bankName">बैंकको नाम <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="bankName"
                                            placeholder="बैंकको नाम ">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="AccNum"> एकाउन्ट नम्वर <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="AccNum"
                                            placeholder=" एकाउन्ट नम्वर">
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>

                                <h5 class="my-4 text-center">उपभोक्ता समितिका पदाधिकारीहरु र सदस्यहरुको बिवरण </h5>

                                <div class="d-flex justify-content-end align-items-center ml-2 my-3">
                                    <div>
                                        <button type="submit" class="btn btn-variant-one mr-1">डाउलोड गर्नुहोस् <i
                                                class="fa-solid fa-file-arrow-down ml-2"></i></button>
                                    </div>
                                    <div>
                                        {{-- <label for="formFile" class="form-label">इम्पोर्ट गर्नुहोस् </label> --}}
                                        <input class="form-control" type="file" id="formFile">
                                    </div>

                                </div>

                                <div class="form-row form-table">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>नाम र थर </th>
                                                <th>पद</th>
                                                <th>ठेगाना</th>
                                                <th> फोन न.</th>
                                                <th>नागरिकता न.</th>
                                                <th>कार्य</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control" id="nameSurname"></td>
                                                <td>
                                                    <select id="designation" class="form-control">
                                                        <option selected>-</option>
                                                        <option>पद</option>
                                                        <option value="fisyear">पद</option>
                                                        <option value="fisyear">पद </option>
                                                        <option value="fisyear">पद</option>
                                                    </select>
                                                </td>
                                                <td><input type="text" class="form-control" id="nameSurname"></td>
                                                <td><input type="text" class="form-control" id="nameSurname"></td>
                                                <td><input type="text" class="form-control" id="nameSurname"></td>
                                                <td><input type="text" class="form-control" id="nameSurname"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="row justify-content-end w-100 mb-2">
                                        <button class="btn btn-variant-five mr-1"> थप्नुहोस
                                            <i class="fa-solid fa-plus ml-1"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>
                                <h5 class="my-4 text-center">संस्थाको कार्यालयको ठेगाना</h5>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="state">प्रदेश <span class="text-danger">*</span></label>
                                        <select id="state" class="form-control">
                                            <option selected>-</option>
                                            <option>बागमती</option>
                                            <option>बागमती</option>
                                            <option>बागमती </option>
                                            <option>बागमती</option>
                                            <option>बागमती</option>
                                            <option>बागमती</option>
                                            <option>बागमती</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="district">जिल्ला <span class="text-danger">*</span></label>
                                        <select id="district" class="form-control">
                                            <option selected>-</option>
                                            <option>धादिंग</option>
                                            <option>धादिंग</option>
                                            <option>धादिंग </option>
                                            <option>धादिंग</option>
                                            <option>धादिंग</option>
                                            <option>धादिंग</option>
                                            <option>धादिंग</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="palika">गाउँ/ नगरपालिका <span class="text-danger">*</span></label>
                                        <select id="palika" class="form-control">
                                            <option selected>-</option>
                                            <option>नीलकण्ठ </option>
                                            <option>नीलकण्ठ </option>
                                            <option>नीलकण्ठ </option>
                                            <option>नीलकण्ठ </option>
                                            <option>नीलकण्ठ </option>
                                            <option>नीलकण्ठ </option>
                                            <option>नीलकण्ठ </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="ward"> वडा <span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control" name="ward" id="ward"
                                            placeholder="वडा">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="ward"> टोल </label>
                                        <input type="text" class="form-control" name="tol" id="ward"
                                            placeholder="टोल ">
                                    </div>
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
