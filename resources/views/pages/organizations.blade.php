@extends('layouts.app')
@section('title', 'ORRBP | Organizations')
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
                        <th>संस्थाको नाम
                            <i class="fa-solid fa-arrow-down ml-1"></i>
                        </th>
                        <th>संस्थाको कार्यक्षेत्र </th>
                        <th>आर्थिक श्रोत / बजेट </th>
                        <th> प्रदेश</th>
                        <th>जिल्ला</th>
                        <th>गाउँ/ नगरपालिका </th>
                        <th>सम्पर्क व्यक्तिको नाम </th>
                        <th>स्थिति</th>
                        <th>कार्य</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-cell="org name">संस्थाको नाम</td>
                        <td data-cell="workspace">कार्यक्षेत्र</td>
                        <td data-cell="budget">आर्थिक</td>
                        <td data-cell="state">बागमती</td>
                        <td data-cell="district">धादिंग </td>
                        <td data-cell="gaun">गाउँ</td>
                        <td data-cell="contact">व्यक्ति</td>
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
                            <div class="wdfh9347" data-toggle="modal" data-target="#info">
                                <h2 class="modal-title">संस्था दर्ताको फारम</h2>
                                <i class="fa-solid fa-circle-info"></i>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="companyName">संस्थाको नाम<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="companyName" id="companyName">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="workspace">संस्थाको कार्यक्षेत्र <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="workspace" id="workspace">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="budget">आर्थिक श्रोत / बजेट <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="budget" id="budget">
                                    </div>
                                </div>

                                <label class="text-center mt-4">संस्थाको कार्यालयको ठेगाना<span
                                        class="text-danger">*</span></label>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <select id="state" class="form-control">
                                            <option selected>प्रदेश
                                            </option>
                                            <option>बागमती</option>
                                            <option>बागमती</option>
                                            <option>बागमती </option>
                                            <option>बागमती</option>
                                            <option>बागमती</option>
                                            <option>बागमती</option>
                                            <option>बागमती</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <select id="district" class="form-control">
                                            <option selected>जिल्ला</option>
                                            <option>धादिंग</option>
                                            <option>धादिंग</option>
                                            <option>धादिंग </option>
                                            <option>धादिंग</option>
                                            <option>धादिंग</option>
                                            <option>धादिंग</option>
                                            <option>धादिंग</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <select id="palika" class="form-control">
                                            <option selected>गाउँ/ नगरपालिका </option>
                                            <option>नीलकण्ठ </option>
                                            <option>नीलकण्ठ </option>
                                            <option>नीलकण्ठ </option>
                                            <option>नीलकण्ठ </option>
                                            <option>नीलकण्ठ </option>
                                            <option>नीलकण्ठ </option>
                                            <option>नीलकण्ठ </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <select id="palika" class="form-control">
                                            <option selected>वडा</option>
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

                                <label class="m-2">संस्थाको उद्देस्यहरु</label>
                                <div class="form-group col-md-3">
                                    <textarea name="purpose" id="purpose" cols="90" rows="10"></textarea>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="companyName">संस्थाको नाम<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="companyName" id="companyName">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="workspace">संस्थाको कार्यक्षेत्र <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="workspace" id="workspace">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="budget">आर्थिक श्रोत / बजेट <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="budget" id="budget">
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

        {{-- Info popup --}}
        <div class="row">
            <div id="info" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="wdfh9347">
                                <h2 class="modal-title">संस्था दर्ताको लागि आवस्यकता </h2>
                                <i class="fa-solid fa-circle-info"></i>
                            </div>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis omnis quaerat laborum
                            facilis, magni molestiae, repellendus recusandae sit, inventore ratione labore. Dolores,
                            laudantium vero magni nam omnis quam nobis harum?
                            Temporibus suscipit iste laudantium praesentium totam molestiae id. Et facilis eius deserunt
                            alias beatae minima laborum eos reiciendis? Fugiat vel asperiores reiciendis maiores
                            exercitationem iste itaque natus aperiam vitae? Consequuntur.
                            Corrupti voluptatibus dolore pariatur fugiat perferendis molestiae ducimus quaerat cumque
                            consequatur maiores! Iure nihil tenetur porro voluptatum officia aspernatur architecto ratione
                            est. Quaerat natus illum explicabo in quo quis nemo?
                            Soluta, quas! Ex natus animi, tempora, unde asperiores ad perferendis maiores, amet nulla
                            placeat vitae voluptates dicta veritatis! Adipisci, explicabo! Cumque, iusto facere veniam
                            eligendi expedita ducimus quis perspiciatis nobis?
                            Atque porro corrupti tenetur nesciunt non autem, tempore voluptates impedit esse quidem.
                            Quisquam repellendus temporibus eaque dolore deleniti natus eum illo, accusantium iure,
                            inventore saepe laborum? Rem corporis fugit qui?
                            Nisi ipsam veniam quia a fugit corporis possimus, praesentium ex nulla ipsa consequuntur impedit
                            perspiciatis atque cumque, aut quasi numquam, neque non repudiandae tenetur! Delectus id
                            inventore voluptates modi ducimus!
                            Sint voluptate facilis sunt architecto nemo, quia quas incidunt quibusdam saepe dicta quaerat
                            in, provident doloribus itaque nam eveniet quis? Dolores doloremque velit expedita, consectetur
                            facere corrupti suscipit labore vitae!
                            Blanditiis, eius exercitationem. Dignissimos sequi dolor temporibus id esse atque debitis vero
                            provident voluptate! Aperiam magnam, cum, voluptas labore asperiores sapiente, rem modi quaerat
                            ipsam doloribus explicabo maxime esse necessitatibus.
                            Laborum aliquam vel quam qui nostrum voluptatum saepe porro quibusdam! Necessitatibus asperiores
                            ut rerum doloribus ratione dicta enim cum totam? Aliquam, sed molestias quo obcaecati sit
                            pariatur soluta neque quia.
                            Dolore perferendis asperiores repellendus debitis, quos culpa cum repellat sequi iste aspernatur
                            voluptatibus hic ab dignissimos assumenda aut, ut similique sit commodi quas voluptate, voluptas
                            consequuntur sunt aliquid? Nulla, deleniti!
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
