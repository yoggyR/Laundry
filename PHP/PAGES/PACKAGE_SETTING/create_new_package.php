<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom"><label for="" style="color: rgb(134, 133, 133);">Package setting</label>
    <label><span style="font-weight: bold; margin-left: -500px;"> / <?php echo ($pages); ?> </span></label><a href="main.php?page=Package setting" type="button" class="btn-close" title="Close this page"></a>
</div>
<div class='row'>
    <div class="md-col-12">
        <div class="countainer pt-5 cnpe_countainer">
            <form action="">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label cnpe_label">Name package</label>
                        <input type="text" class="form-control" placeholder="Enter name package">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label cnpe_label">Price per kg</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text cnpe_span">IDR</span>
                            <input type="text" class="form-control" placeholder="Enter price per kg">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label cnpe_label">Price per level</label>
                        <div class="input-group flex-nowrap pb-2">
                            <span class="input-group-text cnpe_span">Level 1</span>
                            <input type="text" class="form-control" placeholder="Enter price per level">
                        </div>
                        <div class="input-group flex-nowrap pb-2">
                            <span class=" input-group-text cnpe_span">Level 2</span>
                            <input type="text" class="form-control" placeholder="Enter price per level">
                        </div>
                        <div class="input-group flex-nowrap pb-2">
                            <span class="input-group-text cnpe_span">Level 3</span>
                            <input type="text" class="form-control" placeholder="Enter price per level">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label cnpe_label">Processing time</label>
                        <div class="row pb-2">
                            <div class="col">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text cnpe_span">Min</span>
                                    <input type="text" class="form-control" placeholder="Weight">
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text cnpe_span">Max</span>
                                    <input type="text" class="form-control" placeholder="Weight">
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text cnpe_span">Day</span>
                                    <input type="text" class="form-control" placeholder="Day needed">
                                </div>
                            </div>
                        </div>
                        <div class="row pb-2">
                            <div class="col">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text cnpe_span">Min</span>
                                    <input type="text" class="form-control" placeholder="Weight">
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text cnpe_span">Max</span>
                                    <input type="text" class="form-control" placeholder="Weight">
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text cnpe_span">Day</span>
                                    <input type="text" class="form-control" placeholder="Day needed">
                                </div>
                            </div>
                        </div>

                        <div class="row pb-2">
                            <div class="col">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text cnpe_span">Min</span>
                                    <input type="text" class="form-control" placeholder="Weight">
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text cnpe_span">Max</span>
                                    <input type="text" class="form-control" placeholder="Weight">
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text cnpe_span">Day</span>
                                    <input type="text" class="form-control" placeholder="Day needed">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row pb-2">
                            <div class="col">
                                <button type="button" class="btn cnpe_btn_new"><img src="../../ASSET/ICON/PACKAGE/134224_add_plus_new_icon.svg" class="cnpe_img">New level</button>
                            </div>
                            <div class="col">
                                <div class="input-group flex-nowrap">
                                    <button type="button" class="btn cnpe_btn_delete"><img src="../../ASSET/ICON/PACKAGE/5208399_delete_garbage_recycle_remove_trash_icon.svg" class="cnpe_img">Delete level</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row pb-2">
                            <div class="col">
                                <button type="button" class="btn cnpe_btn_new"><img src="../../ASSET/ICON/PACKAGE/134224_add_plus_new_icon.svg" class="cnpe_img">New processing time</button>
                            </div>
                            <div class="col">
                                <div class="input-group flex-nowrap">
                                    <button type="button" class="btn cnpe_btn_delete"><img src="../../ASSET/ICON/PACKAGE/5208399_delete_garbage_recycle_remove_trash_icon.svg" class="cnpe_img">Delete processing time</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="pt-4">
                <button type="button" class="btn cnpe_btn_save_new"><img src="../../ASSET/ICON/PACKAGE/2639912_save_icon.svg" class="cnpe_img">Save</button>
            </div>
        </div>
    </div>
</div>