<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'          => 'El campo :attribute debe ser aceptado.',
    'accepted_if'       => 'El campo :attribute debe ser aceptado cuando :other es :value.',
    'active_url'        => 'El campo :attribute no es una URL válida.',
    'after'             => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal'    => 'El campo atributo debe ser una fecha posterior o igual a :date.',
    'alpha'             => 'El campo :attribute solo debe contener letras.',
    'alpha_dash'        => 'El campo :attribute solo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num'         => 'El campo :attribute debe contener solo letras y números.',
    'array'             => 'El campo :attribute debe ser un array.',
    'before'            => 'El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal'   => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'array'         => 'El campo :attribute debe tener entre :min y :max elementos.',
        'file'          => 'El campo :attribute debe tener entre :min y :max kilobytes.',
        'numeric'       => 'El campo :attribute debe tener entre :min y :max.',
        'string'        => 'El campo :attribute debe tener entre :min y :max caracteres.',
    ],
    'boolean'           => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed'         => 'La confirmación de :attribute no coincide.',
    'current_password'  => 'The password is incorrect.', 'La contraseña es incorrecta.',
    'date'              => 'El campo :attribute no es una fecha válida.',
    'date_equals'       => 'El campo :attribute debe ser una fecha igual a :date.',
    'date_format'       => 'El campo :attribute no coincide con el formato :format.',
    'declined'          => 'El campo :attribute debe marcar como rechazado.',
    'declined_if'       => 'El campo :attribute debe marcar como rechazado cuando :other es :value.',
    'different'         => 'Los campos :attribute y :other deben ser diferentes.',
    'digits'            => 'El campo :attribute debe ser de :digits dígitos.',
    'digits_between'    => 'El campo :attribute debe tener entre :min y :max dígitos.',
    'dimensions'        => 'El campo :attribute no tiene una dimensión válida.',
    'distinct'          => 'El campo :attribute tiene un valor duplicado.',
    'doesnt_start_with' => 'El campo :attribute no puede comenzar con uno de los siguientes valores: :values.',
    'ends_with'         => 'El campo :attribute debe terminar con alguno de los valores: :values.',
    'enum'              => 'El campo seleccionado en :attribute no es válido.',
    'exists'            => 'El campo :attribute seleccionado no es válido.',
    'file'              => 'El campo :attribute debe ser un archivo.',
    'filled'            => 'El campo :attribute es requerido.',
    'gt' => [
        'numeric'       => 'El campo :attribute debe ser mayor que :value.',
        'file'          => 'El campo :attribute debe ser mayor que :value kilobytes.',
        'string'        => 'El campo :attribute debe ser mayor que :value caracteres.',
        'array'         => 'El campo :attribute puede tener hasta :value elementos.',
    ],
    'gte' => [
        'numeric'       => 'El campo :attribute debe ser mayor o igual que :value.',
        'file'          => 'El campo :attribute debe ser mayor o igual que :value kilobytes.',
        'string'        => 'El campo :attribute debe ser mayor o igual que :value caracteres.',
        'array'         => 'El campo :attribute puede tener :value elementos o más.',
    ],
    'image'             => 'El campo :attribute debe ser una imagen.',
    'in'                => 'El campo :attribute seleccionado no es válido.',
    'in_array'          => 'El campo :attribute no existe en :other.',
    'integer'           => 'El campo :attribute debe ser un entero.',
    'ip'                => 'El campo :attribute debe ser una dirección IP válida.',
    'ipv4'              => 'El campo :attribute debe ser una dirección IPv4 válida.',
    'ipv6'              => 'El campo :attribute debe ser una dirección IPv6 válida.',
    'json'              => 'El campo :attribute debe ser una cadena JSON válida.',
    'lt' => [
        'numeric'       => 'El campo :attribute debe ser menor que :max.',
        'file'          => 'El campo :attribute debe ser menor que :max kilobytes.',
        'string'        => 'El campo :attribute debe ser menor que :max caracteres.',
        'array'         => 'El campo :attribute puede tener hasta :max elementos.',
    ],
    'lte' => [
        'numeric'       => 'El campo :attribute debe ser menor o igual que :max.',
        'file'          => 'El campo :attribute debe ser menor o igual que :max kilobytes.',
        'string'        => 'El campo :attribute debe ser menor o igual que :max caracteres.',
        'array'         => 'El campo :attribute no puede tener más que :max elementos.',
    ],
    'mac_address'       => 'El campo :attribute debe ser una dirección MAC válida.',
    'max' => [
        'numeric'       => 'El campo :attribute debe ser menor que :max.',
        'file'          => 'El campo :attribute debe ser menor que :max kilobytes.',
        'string'        => 'El campo :attribute debe ser menor que :max caracteres.',
        'array'         => 'El campo :attribute puede tener hasta :max elementos.',
    ],
    'mimes'             => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'mimetypes'         => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric'       => 'El campo :attribute debe tener al menos :min.',
        'file'          => 'El campo :attribute debe tener al menos :min kilobytes.',
        'string'        => 'El campo :attribute debe tener al menos :min caracteres.',
        'array'         => 'El campo :attribute debe tener al menos :min elementos.',
    ],
    'multiple_of'       => 'El campo :attribute debe ser un múltiplo de :value.',
    'not_in'            => 'El campo :attribute seleccionado es invalido.',
    'not_regex'         => 'El formato del campo :attribute no es válido.',
    'numeric'           => 'El campo :attribute debe ser un número.',
    'password' => [
        'letters'       => 'El campo :attribute debe contener al menos una letra.',
        'mixed'         => 'El campo :attribute debe contener al menos una letra mayúscula y una minúscula.',
        'numbers'       => 'El campo :attribute debe contener al menos un número.',
        'symbols'       => 'El campo :attribute debe contener al menos un símbolo.',
        'uncompromised' => 'El :attribute dado ha aparecido en una fuga de datos. Por favor, elija un :attribute diferente.',
    ],
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'array' => 'The :attribute must contain :size items.',
        'file' => 'The :attribute must be :size kilobytes.',
        'numeric' => 'The :attribute must be :size.',
        'string' => 'The :attribute must be :size characters.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute must be a valid URL.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
