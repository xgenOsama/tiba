$('input.ele').keyup(function () {
    var value = $(this).val();
    var name = $(this).attr("name");
    // console.log('name: '+ name + ' , value: ' + value);
    if (name == "p") {
        $('input[name=p2o5]').val(value * 2.2915);
    }
    if (name == "p2o5") {
        $('input[name=p]').val(value * 0.4364);
    }
    if (name == "k") {
        $('input[name=k2o]').val(value * 1.2047);
    }
    if (name == "k2o") {
        $('input[name=k]').val(value * 0.8301);
    }
    if (name == "ca3") {
        $('input[name=caco3]').val(value * 2.5);
    }
    if (name == "caco3") {
        $('input[name=ca3]').val(value * 0.4);
    }
    if (name == "ca") {
        $('input[name=cao]').val(value * 1.3994);
    }
    if (name == "cao") {
        $('input[name=ca]').val(value * 0.7146);
    }
    if (name == "mg") {
        $('input[name=mgo]').val(value * 1.6581);
    }
    if (name == "mgo") {
        $('input[name=mg]').val(value * 0.6031);
    }
    if (name == "s") {
        //alert('s');
        $('input[name=so3]').val(value * 2.5);
    }
    if (name == "so3") {
        $('input[name=s]').val(value * 0.4);
    }
});
