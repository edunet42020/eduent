"use strict";
var KTDropzoneDemo = {
    init: function () {
        $("#kt_dropzone_1").dropzone({
                url: "https://keenthemes.com/scripts/void.php",
                paramName: "file",
                maxFiles: 1,
                maxFilesize: 5,
                addRemoveLinks: !0,
                accept: function (e, o) {
                    "justinbieber.jpg" == e.name ? o("Naha, you don't.") : o()
                }
            }), $("#kt_dropzone_2").dropzone({
                url: "https://keenthemes.com/scripts/void.php",
                paramName: "file",
                maxFiles: 10,
                maxFilesize: 10,
                addRemoveLinks: !0,
                accept: function (e, o) {
                    "justinbieber.jpg" == e.name ? o("Naha, you don't.") : o()
                }
            }), $("#kt_dropzone_3").dropzone({
                url: "https://keenthemes.com/scripts/void.php",
                paramName: "file",
                maxFiles: 10,
                maxFilesize: 10,
                addRemoveLinks: !0,
                acceptedFiles: "image/*,application/pdf,.psd",
                accept: function (e, o) {
                    "justinbieber.jpg" == e.name ? o("Naha, you don't.") : o()
                }
            }),
            function () {
                var e = "#kt_dropzone_4",
                    o = $(e + " .dropzone-item");
                o.id = "";
                var n = o.parent(".dropzone-items").php();
                o.remove();
                var t = new Dropzone(e, {
                    url: "https://keenthemes.com/scripts/void.php",
                    parallelUploads: 20,
                    previewTemplate: n,
                    maxFilesize: 1,
                    autoQueue: !1,
                    previewsContainer: e + " .dropzone-items",
                    clickable: e + " .dropzone-select"
                });
                t.on("addedfile", function (o) {
                    o.previewElement.querySelector(e + " .dropzone-start").onclick = function () {
                        t.enqueueFile(o)
                    }, $(document).find(e + " .dropzone-item").css("display", ""), $(e + " .dropzone-upload, " + e + " .dropzone-remove-all").css("display", "inline-block")
                }), t.on("totaluploadprogress", function (o) {
                    $(this).find(e + " .progress-bar").css("width", o + "%")
                }), t.on("sending", function (o) {
                    $(e + " .progress-bar").css("opacity", "1"), o.previewElement.querySelector(e + " .dropzone-start").setAttribute("disabled", "disabled")
                }), t.on("complete", function (e) {
                    setTimeout(function () {
                        $("#kt_dropzone_4 .dz-complete .progress-bar, #kt_dropzone_4 .dz-complete .progress, #kt_dropzone_4 .dz-complete .dropzone-start").css("opacity", "0")
                    }, 300)
                }), document.querySelector(e + " .dropzone-upload").onclick = function () {
                    t.enqueueFiles(t.getFilesWithStatus(Dropzone.ADDED))
                }, document.querySelector(e + " .dropzone-remove-all").onclick = function () {
                    $(e + " .dropzone-upload, " + e + " .dropzone-remove-all").css("display", "none"), t.removeAllFiles(!0)
                }, t.on("queuecomplete", function (o) {
                    $(e + " .dropzone-upload").css("display", "none")
                }), t.on("removedfile", function (o) {
                    t.files.length < 1 && $(e + " .dropzone-upload, " + e + " .dropzone-remove-all").css("display", "none")
                })
            }(),
            function () {
                var e = "#kt_dropzone_5",
                    o = $(e + " .dropzone-item");
                o.id = "";
                var n = o.parent(".dropzone-items").php();
                o.remove();
                var t = new Dropzone(e, {
                    url: "https://keenthemes.com/scripts/void.php",
                    parallelUploads: 20,
                    maxFilesize: 1,
                    previewTemplate: n,
                    previewsContainer: e + " .dropzone-items",
                    clickable: e + " .dropzone-select"
                });
                t.on("addedfile", function (o) {
                    $(document).find(e + " .dropzone-item").css("display", "")
                }), t.on("totaluploadprogress", function (o) {
                    $(e + " .progress-bar").css("width", o + "%")
                }), t.on("sending", function (o) {
                    $(e + " .progress-bar").css("opacity", "1")
                }), t.on("complete", function (e) {
                    setTimeout(function () {
                        $("#kt_dropzone_5 .dz-complete .progress-bar, #kt_dropzone_5 .dz-complete .progress").css("opacity", "0")
                    }, 300)
                })
            }()
    }
};
KTUtil.ready(function () {
    KTDropzoneDemo.init()
});