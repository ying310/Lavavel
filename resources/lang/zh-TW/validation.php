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

    'accepted' => '必須接受 :attribute。',
    'active_url' => ':attribute 並非一個有效的網址。',
    'after' => ':attribute 必須要在 :date 之後。',
    'after_or_equal' => ':attribute 必須要在 :date 之後或相等。',
    'alpha' => ':attribute 只能以字母組成。',
    'alpha_dash' => ':attribute 只能以字母、數字及斜線組成。',
    'alpha_num' => ':attribute 只能以字母及數字組成。',
    'array' => ':attribute 必須為陣列。',
    'before' => ':attribute 必須要在 :date 之前。',
    'before_or_equal' => ':attribute 必須要在 :date 之前或相等。',
    'between' => [
        'numeric' => ':attribute 必須介於 :min 和 :max 之間。',
        'file' => ':attribute 必須介於 :min 和 :max KB 之間。',
        'string' => ':attribute 必須介於 :min 和 :max 個字元 之間。',
        'array' => ':attribute 必須介於 :min 和 :max 個元素 之間。',
    ],
    'boolean' => ':attribute 必須為布林值。',
    'confirmed' => ':attribute 確認欄位的輸入並不相符',
    'date' => ':attribute 並非一個有效的日期。',
    'date_equals' => ':attribute 必須和 :date 相等。',
    'date_format' => ':attribute 與 :format 格式不相符。',
    'different' => ':attribute 與 :other 必須不同。',
    'digits' => ':attribute 必須是 :digits 位數字。',
    'digits_between' => ':attribute 必須介於 :min 至 :max 位數字。',
    'dimensions' => ':attribute 不符合圖片尺寸',
    'distinct' => ':attribute 已經存在。',
    'email' => ':attribute 不是有效的E-mail格式',
    'ends_with' => ':attribute 必須以 :values 作為結束。',
    'exists' => '所選擇的 :attribute 選項無效',
    'file' => ':attribute 必須是一個檔案。',
    'filled' => ':attribute 不能留空。',
    'gt' => [
        'numeric' => ':attribute 必須大於 :value。',
        'file' => ':attribute 必須大於 :value KB。',
        'string' => ':attribute 必須大於 :value 個字元。',
        'array' => ':attribute 必須大於 :value 個元素。',
    ],
    'gte' => [
        'numeric' => ':attribute 必須大於等於 :value。',
        'file' => ':attribute 必須大於等於 :value KB。',
        'string' => ':attribute 必須大於等於 :value 個字元。',
        'array' => ':attribute 必須大於等於 :value 個元素。',
    ],
    'image' => ':attribute 必須是一張圖片。',
    'in' => '所選擇的 :attribute 選項無效。',
    'in_array' => ':attribute 沒有在 :other 中。',
    'integer' => ':attribute 必須是一個整數。',
    'ip' => ':attribute 不是一個有效的IP網址。',
    'ipv4' => ':attribute 不是一個有效的IPv4網址。',
    'ipv6' => ':attribute 不是一個有效的IPv6網址。',
    'json' => ':attribute 不是一個有效的JSON字串。',
    'lt' => [
        'numeric' => ':attribute 必須小於 :value。',
        'file' => ':attribute 必須小於 :value KB。',
        'string' => ':attribute 必須小於 :value 個字元。',
        'array' => ':attribute 必須小於 :value 個元素。',
    ],
    'lte' => [
        'numeric' => ':attribute 必須小於等於 :value。',
        'file' => ':attribute 必須小於等於 :value KB。',
        'string' => ':attribute 必須小於等於 :value 個字元。',
        'array' => ':attribute 必須小於等於 :value 個元素。',
    ],
    'max' => [
        'numeric' => ':attribute 不能超過 :max。',
        'file' => ':attribute 不能超過 :max KB。',
        'string' => ':attribute 不能超過 :max 個字元。',
        'array' => ':attribute 不能超過 :max 個元素。',
    ],
    'mimes' => ':attribute 必須為 :values 的檔案。',
    'mimetypes' => ':attribute 必須為 :values 的檔案。',
    'min' => [
        'numeric' => ':attribute 不能小於 :min。',
        'file' => ':attribute 不能小於 :min KB。',
        'string' => ':attribute 不能小於 :min 個字元。',
        'array' => ':attribute 不能小於 :min 個元素。',
    ],
    'not_in' => '所選擇的 :attribute 選項無效。',
    'not_regex' => ':attribute 格式錯誤。',
    'numeric' => ':attribute 必須是一個數字。',
    'present' => ':attribute 必須是百分比。',
    'regex' => ':attribute 格式錯誤。',
    'required' => ':attribute 不能留空。',
    'required_if' => '當 :other 是 :value 時， :attribute 不能留空。',
    'required_unless' => '當 :other 不是 :value 時， :attribute 不能留空。',
    'required_with' => '當 :values 出現時 :attribute 不能留空。',
    'required_with_all' => '當 :values 出現時 :attribute 不能留空。',
    'required_without' => '當 :values 留空時 :attribute 不能留空。',
    'required_without_all' => '當 :values 都沒出現時 :attribute 不能留空。',
    'same' => ':attribute 與 :other 必須相同。',
    'size' => [
        'numeric' => ':attribute 的大小必須是 :size。',
        'file' => ':attribute 的大小必須是 :size KB。',
        'string' => ':attribute 必須是 :size 個字元。',
        'array' => ':attribute 必須有 :size 個元素。',
    ],
    'starts_with' => ':attribute 必須以 :values 其中之一開始。',
    'string' => ':attribute 必須是一個字串。',
    'timezone' => ':attribute 必須是一個正確的時區值。',
    'unique' => ':attribute 已經存在。',
    'uploaded' => ':attribute 上傳失敗。',
    'url' => ':attribute 格式錯誤。',
    'uuid' => ':attribute 必須是一個有效的UUID值。',

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

    'attributes' => [
      'nickname' => '暱稱',
      'email' => '電子郵件',
      'password' => '密碼',
      'password_confirmation' => '確認密碼',
      'buy_count' => '購買數量'
    ],

];
