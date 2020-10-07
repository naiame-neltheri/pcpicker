<!-- Create CPU Modal -->
<div class="modal fade" id="createCPUModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-7 rightborder">
                        <div class="alert alert-info" role="alert">
                            Help Center:
                        </div>
                        <div class="alert alert-success" role="alert">
                            Don't worry if you don't know about your product, just search and click fill button 
                            <button type="button" class="btn btn-success recc_sync_button"><i class="fas fa-arrow-right"></i></button>
                            .
                        </div>
                        <div class="form-group">
                            <input id="custom_search_recc_cpu" type="text" class="form-control" placeholder="Search by name ...">
                            <table id="table_recc_cpu" class="table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Core Count</th>
                                        <th>Core Clock</th>
                                        <th>Boost Clock</th>
                                        <th>TDP</th>
                                        <th>Integrated Graphics</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="alert alert-info" role="alert">
                            Registration Form:
                        </div>
                        <div class="form-group">
                            <label for="title">Name <span class="require">*</span></label>
                            <input type="text" class="form-control" id="_cpu_name">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="title">Core Count <span class="require">*</span></label>
                                    <input type="number" class="form-control" id="_cpu_corecount" placeholder="8">
                                </div>
                                <div class="col">
                                    <label for="title">Core Clock</label>
                                    <input type="number" class="form-control" id="_cpu_coreclock" placeholder="3.6 GHz">
                                </div>
                                <div class="col">
                                    <label for="title">Boost Clock</label>
                                    <input type="number" class="form-control" id="_cpu_boostclock" placeholder="4.2 GHz">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="title">TDP</label>
                                    <input type="number" class="form-control" id="_cpu_tdp" placeholder="65 W">
                                </div>
                                <div class="col">
                                    <label for="title">SMT</label>
                                    <select id="_cpu_smt" class="form-control">
                                        <option selected value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="title">Price <span class="require">*</span></label>
                                    <input type="number" class="form-control" id="_cpu_price" placeholder="180000 ₮">
                                </div>
                                <div class="col">
                                    <label for="title">Used</label>
                                    <select id="_cpu_used" class="form-control">
                                        <option selected value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="title">Integrated Graphics</label>
                                    <input type="text" class="form-control" id="_cpu_intg_grp" placeholder="Intel UHD Graphics 630">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title">Description <span class="require">*</span></label>
                            <textarea class="form-control" id="_cpu_desc" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <fieldset class="form-group">
                                <a class="btn btn-dark" href="javascript:void(0)" onclick="$('#cpu-image').click()">Upload Image</a>
                                <input type="file" id="cpu-image" name="cpu-image" style="display: none;" class="form-control" multiple>
                            </fieldset>
                            <div class="preview-images-zone">
                            </div>
                        </div>
                    </div>
                </div>
                        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info" onclick="saveProduct_CPU();">Save product</button>
            </div>
        </div>
    </div>
</div>

<!-- 
name
courcount
coreclock
boostclock
tdp
integrated_graphics
smt
price
description
used
sold
 -->