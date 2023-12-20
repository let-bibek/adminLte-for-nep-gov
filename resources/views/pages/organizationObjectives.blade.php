@extends('layouts.app')
@section('title', 'ORRBP | Organization Objectives')
@section('content')
    <div class="page p-3">
        <h1 class="page-heading">आवेदन दिएका संस्थाको उद्देश्यको सुची </h1>
        <div class="row ml-2">
            <a href="/documents/add-new" class="btn btn-custom-primary" data-toggle="modal" data-target="#newDocumentForm">
                थप्नुहोस
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
                    <th>संस्थाको प्रकार
                    </th>
                    <th>कोड न.
                        <i class="fa-solid fa-arrow-down ml-1"></i>
                    </th>
                    <th>संस्थाको उद्देश्य(अंग्रेजीमा)
                        {{-- <i class="fa-solid fa-arrow-up ml-1"></i> --}}
                    </th>
                    <th>संस्थाको उद्देश्य(नेपालीमा)
                        {{-- <i class="fa-solid fa-arrow-up ml-1"></i> --}}
                    </th>
                    <th>सम्पादन</th>
                </thead>
                <tbody>
                    <tr>
                        <td data-cell="org type">संस्थाको प्रकार</td>
                        <td data-cell="code">1</td>
                        <td data-cell="org objectives in english">Organization Objectives in English</td>
                        <td data-cell="org objectives in nepali">संस्थाको उद्देश्य नेपालीमा</td>
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
                        <td data-cell="org type">संस्थाको प्रकार</td>
                        <td data-cell="code">2</td>
                        <td data-cell="org objectives in english">Organization Objectives in English</td>
                        <td data-cell="org objectives in nepali">संस्थाको उद्देश्य नेपालीमा</td>
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
                        <td data-cell="org type">संस्थाको प्रकार</td>
                        <td data-cell="code">3</td>
                        <td data-cell="org objectives in english">Organization Objectives in English</td>
                        <td data-cell="org objectives in nepali">संस्थाको उद्देश्य नेपालीमा</td>
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
                            <h2 class="modal-title">उद्देश्य थप्नुहोस </h2>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="selectOrg">संस्थाको प्रकार</label>
                                        <select id="selectOrg" class="form-control">
                                            <option selected>संस्थाको प्रकार...</option>
                                            <option value="barga-ka">क वर्ग </option>
                                            <option value="barga-ka">ख वर्ग </option>
                                            <option value="barga-ka">ग वर्ग </option>
                                            <option value="barga-ka">घ वर्ग </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="orgCode">कोड न.<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="orgCode" placeholder="कोड न.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="objEng">उद्देश्य(अंग्रेजीमा)<span
                                            class="text-danger">*</span></label></label>
                                    <input type="text" class="form-control" id="objEng"
                                        placeholder="उद्देश्य(अंग्रेजीमा)">
                                </div>
                                <div class="form-group">
                                    <label for="objNep">उद्देश्य(नेपालीमा)<span
                                            class="text-danger">*</span></label></label>
                                    <input type="text" class="form-control" id="objNep"
                                        placeholder="उद्देश्य(नेपालीमा)">
                                </div>
                                <div class="row justify-content-center">
                                    <button role="button" class="btn btn-custom-primary mr-1">थप्नुहोस <i
                                            class="fa-solid fa-plus ml-2"></i> </button>
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
