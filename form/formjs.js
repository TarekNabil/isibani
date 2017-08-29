  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {

            personal_details_surname: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your Surname'
                    }
                }
            },
            personal_details_first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
            personal_details_id_number: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your ID number'
                    },
                    stringLength: {
                        min: 12,
                        message:'Please enter at least 12 number'
                    },
                    integer: {
                        message: 'The value is not an integer'
                    }
                }
            },
            personal_details_date_of_birth: {
                validators: {
                    notEmpty: {
                        message: 'The date of birth is required'
                    },
                    date: {
                        format: 'DD/MM/YYYY',
                        message: 'The date of birth is not valid'
                    }
                }
            },

            personal_details_age: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your age'
                    },
                    integer: {
                        message: 'The value is not an integer'
                    }
                }
            
            },

            personal_details_gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },

            Previous_School_School_Name:{
                validators:{
                    notEmpty:{
                        message:'Last school name is required'
                    },
                    stringLength: {
                        min: 2
                    }
                }
            },
            Previous_School_year:{
                validators: {
                    notEmpty: {
                        message: 'Please supply graduate year'
                    },
                    integer: {
                        message: 'The value is not an integer'
                    },
                    between: {
                            min: 1920,
                            max: 2020,
                            message: 'Graduation date must be reasonable'
                        }
                }
            },
            Previous_School_grade: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your grade'
                    }
                }
            },
            Previous_School_province: {
                validators: {
                    notEmpty: {
                        message: 'Province is required'
                    }
                }
            },

            parent_or_guardian_surname:{
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply Surname'
                    }
                }

            },

            parent_or_guardian_first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply first name'
                    }
                }
            },

            parent_or_guardian_id_number: {
                validators: {
                    notEmpty: {
                        message: 'Please supply the ID number'
                    },
                    stringLength: {
                        min: 12,
                        message:'Please enter at least 12 number'
                    },
                    integer: {
                        message: 'The value is not an integer'
                    }
                }
            },
            parent_or_guardian_address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply Residential address'
                    }
                }
            },
            parent_or_guardian_zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply zip code'
                    },
                    zipCode: {
                        country: 'IN',
                        message: 'Please supply a vaild zip code in India'
                    }
                }
            },
            parent_or_guardian_phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply home phone number'
                    },
                    phone: {
                        country: 'IN',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            parent_or_guardian_cell_phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply work cell phone number'
                    },
                    phone: {
                        country: 'IN',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            parent_or_guardian_occupation: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your occupation'
                    }
                }
            },

            parent_or_guardian_company_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your company name'
                    }
                }
            },
            parent_or_guardian_supervisor: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your supervisor name'
                    }
                }
            },
            parent_or_guardian_section: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply section name'
                    }
                }
            },
            parent_or_guardian_work_address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply work address'
                    }
                }
            },
            parent_or_guardian_work_zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply zip code'
                    },
                    zipCode: {
                        country: 'IN',
                        message: 'Please supply a vaild zip code in India'
                    }
                }
            },
            parent_or_guardian_work_phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply work phone number'
                    },
                    phone: {
                        country: 'IN',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            subject:{
                validators: {
                    notEmpty: {
                        message: 'Subject is required. Please select one subject at least'
                    }
                }
            },
            payment:{
                validators: {
                    notEmpty: {
                        message: 'Please select Payment'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
            $('#contact_form').data('bootstrapValidator').resetForm();

        // Prevent form submission
        e.preventDefault();

        // Get the form instance
        var $form = $(e.target);

        // Get the BootstrapValidator instance
        var bv = $form.data('bootstrapValidator');

        // Use Ajax to submit form data
        $.post($form.attr('action'), $form.serialize(), function(result) {
            console.log(result);
        }, 'json');
    });
});

