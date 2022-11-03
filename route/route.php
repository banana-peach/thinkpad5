<?php
Route::rule('hello', 'Index/hello')->allowCrossDomain();
Route::rule('index', 'Index/index')->allowCrossDomain();
Route::rule('fuck', 'Index/fuck')->allowCrossDomain();
Route::rule('addDrug/checkDrugs', 'Index/nfc')->allowCrossDomain();
Route::rule('addDrug/drugSetting', 'Index/drugSetting')->allowCrossDomain();
Route::rule('drugs/enrolled/', 'Index/enrolled')->allowCrossDomain();
Route::rule('dialog/getAddList', 'Index/getAddList')->allowCrossDomain();
Route::rule('/equipment/using/', 'Index/usingEquipment')->allowCrossDomain();
Route::rule('/equipment/used/', 'Index/usedEquipment')->allowCrossDomain();
Route::rule('/equipment/enrolled/', 'Index/equipmentEnrolled')->allowCrossDomain();
Route::rule('/addDrug/previewScheme/', 'Index/previewScheme')->allowCrossDomain();
Route::rule('/equipment/sum/', 'Index/sumEquipment')->allowCrossDomain();
Route::rule('/dialog/thingdetails/', 'Index/thingdetails')->allowCrossDomain();
Route::rule('/setting/boxscheme/', 'Index/boxscheme')->allowCrossDomain();
Route::rule('/others/drugnames/', 'Index/drugnames')->allowCrossDomain();
Route::rule('/others/equipments/', 'Index/getequipments')->allowCrossDomain();
Route::rule('/setting/boxschemes', 'Index/getBoxschemes')->allowCrossDomain();
Route::rule('/setting/checkSchemeName', 'Index/checkSchemeName')->allowCrossDomain();
Route::rule('/boxhistory/search/', 'Index/searchBoxhistory')->allowCrossDomain();
Route::rule('/dialog/doublecheck/', 'Index/doublecheck')->allowCrossDomain();
Route::rule('/dialog/drugsused/', 'Index/drugsused')->allowCrossDomain();
Route::rule('/dialog/checkHistory', 'Index/checkHistory')->allowCrossDomain();
Route::rule('/rolemanage/search', 'Index/searchRolemanage')->allowCrossDomain();
Route::rule('/rolemanage/log', 'Index/userLog')->allowCrossDomain();
Route::rule('/rolemanage/userAction/', 'Index/userAction')->allowCrossDomain();
Route::rule('/dialog/firstdrugs/', 'Index/firstdrugs')->allowCrossDomain();
Route::rule('/dialog/patientinfo/', 'Index/patientInfo')->allowCrossDomain();
Route::rule('/setting/manage/', 'Index/getManage')->allowCrossDomain();
Route::rule('/setting/schemes/', 'Index/getSchemes')->allowCrossDomain();
Route::rule('/cabinetstate/search/', 'Index/searchCabinetstate')->allowCrossDomain();
Route::rule('/cabinetstate/cabinetstate/', 'Index/cabinetstate')->allowCrossDomain();
Route::rule('/cabinetstate/moreNews/', 'Index/moreNews')->allowCrossDomain();
Route::rule('/monitor', 'Index/monitor')->allowCrossDomain();
Route::rule('/boxstate/boxstate/', 'Index/boxstate')->allowCrossDomain();
Route::rule('/index2/dealnews/', 'Index/dealnews')->allowCrossDomain();
Route::rule('/toBeDone/search/', 'Index/toBeDone')->allowCrossDomain();
Route::rule('/toBeDone/compare/', 'Index/compared2BeDone')->allowCrossDomain();
Route::rule('/toBeDone/recycle/', 'Index/recycle2BeDone')->allowCrossDomain();
Route::rule('/toBeDone/openBox/', 'Index/openBoxInfo')->allowCrossDomain();
Route::rule('/toBeDone/audit/', 'Index/auditInfo')->allowCrossDomain();
Route::rule('/index2/getLength', 'Index/getLength')->allowCrossDomain();
Route::rule('/index2/finishReading', 'Index/finishReading')->allowCrossDomain();
Route::rule('/toBeDone/openBoxTime', 'Index/openBoxTime')->allowCrossDomain();
Route::rule('/smxt/patient/', 'Index/smxtPatient')->allowCrossDomain();
Route::rule('/dealliquid/getliquid', 'Index/getliquid')->allowCrossDomain();
Route::rule('/openbox/getbox', 'Index/openbox')->allowCrossDomain();
Route::rule('/openbox/comfirm', 'Index/comfirmOpenbox')->allowCrossDomain();
Route::rule('/openbox/checkstatus', 'Index/checkstatus')->allowCrossDomain();
Route::rule('/information/liquidsummary', 'Index/liquidsummary')->allowCrossDomain();
Route::rule('/information/drugsummary', 'Index/drugsummary')->allowCrossDomain();


Route::get('download', 'Students/downloadFile')->allowCrossDomain();
Route::rule('uploadFile', 'Students/uploadFile')->allowCrossDomain();

Route::rule('getall', 'posts/getall');
Route::rule('eat', 'Posts/eat');

Route::rule('getnews', 'News/getall');
Route::rule('getnewsdetail', 'News/getone');

Route::rule('temp', 'See/index');

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('check', 'Students/index');
Route::get('deleteOne', 'Students/deleteOne');
Route::get('checkOne', 'Students/checkOne');
Route::post('addOne', 'Students/addOne');

Route::post('/dc/login', 'Doctors/login');
Route::get('/dc/checkOne', 'Doctors/checkOne');
