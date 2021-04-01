$(document).ready(function () {
        $("#loginForm").validate(
            {
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 6,
                        maxlength: 12,
                    }
                },
                messages: {
                    email: {
                        required: "Vui lòng nhập email",
                        email: "Vui lòng nhập đúng định dạng",
                    },
                    password: {
                        required: "Vui lòng nhập mật khẩu",
                        minlength: "Mật khẩu phải có ít nhất 6 ký tự",
                        maxlength: "Mật khẩu có tối đa 12 ký tự",
                    }
                }
            }
        )
    }
)
