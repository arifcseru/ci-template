function saveUser() {
    var rowCount = $('#companyProfileTable tr').length - 1;
    var companyProfileList = [];
    for (var i = 0; i < rowCount; i++) {
        var companyProfile = {
            name: $('#companyProfile_name_' + i).val(),
            address: $('#companyProfile_address_' + i).val(),
            establishedDate: $('#companyProfile_establishedDate_' + i).val(),
            email: $('#companyProfile_email_' + i).val(),
            authorName: $('#companyProfile_authorName_' + i).val(),
        }
        companyProfileList.push(companyProfile);
    }
    var companyProfileObj = Object.assign({}, companyProfileList);
    //console.log(companyProfileObj);

    var user = {
        id: $("#id").val(),
        fullName: $("#fullName").val(), email: $("#email").val(), password: $("#password").val(), confirmPassword: $("#confirmPassword").val(), roleId: $("#roleId").val(), companyProfile: companyProfileObj, mobileNumber: $("#mobileNumber").val(),
    };
    var url = baseHref + "common/updateUser";

    $.ajax({
        type: "POST",
        url: url,
        async: false,
        data: user,
        success: function (data) {
            $('#userContainer').html(data);
        },
        error: function (err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function saveUserPreference() {
    var userPreference = {
        id: $("#id").val(),
        userId: $("#userId").val(), activeCompanyId: $("#activeCompanyId").val(), language: $("#language").val(), activeRole: $("#activeRole").val(), showNotification: $("#showNotification").val(), showEmail: $("#showEmail").val(), showTask: $("#showTask").val(), applicationTitle: $("#applicationTitle").val(), metaTags: $("#metaTags").val(),
    };
    var url = baseHref + "common/updateUserPreference";

    $.ajax({
        type: "POST",
        url: url,
        async: false,
        data: userPreference,
        success: function (data) {
            $('#userPreferenceContainer').html(data);
        },
        error: function (err) {
            console.log(err);
            return false;
        }
    });
    return false;
}