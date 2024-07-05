<?php

declare(strict_types=1);

return [
    'accepted' => '必須接受 :attribute。',
    'accepted_if' => '當 :other 為 :value 時，:attribute 必須接受。',
    'active_url' => ':Attribute 不是有效的網址。',
    'after' => ':Attribute 必須要晚於 :date。',
    'after_or_equal' => ':Attribute 必須要等於 :date 或更晚。',
    'alpha' => ':Attribute 只能以字母組成。',
    'alpha_dash' => ':Attribute 只能以字母、數字、連接線(-)及底線(_)組成。',
    'alpha_num' => ':Attribute 只能以字母及數字組成。',
    'array' => ':Attribute 必須為陣列。',
    'ascii' => ':Attribute 必須僅包含單字節字母數字字符和符號。',
    'before' => ':Attribute 必須要早於 :date。',
    'before_or_equal' => ':Attribute 必須要等於 :date 或更早。',
    'between' => [
        'array' => ':Attribute: 必須有 :min - :max 個元素。',
        'file' => ':Attribute 必須介於 :min 至 :max KB 之間。',
        'numeric' => ':Attribute 必須介於 :min 至 :max 之間。',
        'string' => ':Attribute 必須介於 :min 至 :max 個字元之間。',
    ],
    'boolean' => ':Attribute 必須為布林值。',
    'can' => ':Attribute 字段包含未經授權的值。',
    'confirmed' => ':Attribute 確認欄位的輸入不一致。',
    'current_password' => '當前密碼不正確。',
    'date' => ':Attribute 不是有效的日期。',
    'date_equals' => ':Attribute 必須等於 :date。',
    'date_format' => ':Attribute 不符合 :format 的格式。',
    'decimal' => ':Attribute 必須有 :decimal 位小數。',
    'declined' => ':Attribute 必須拒絕。',
    'declined_if' => '當 :other 為 :value 時，:attribute 必須拒絕。',
    'different' => ':Attribute 與 :other 必須不同。',
    'digits' => ':Attribute 必須是 :digits 位數字。',
    'digits_between' => ':Attribute 必須介於 :min 至 :max 位數字。',
    'dimensions' => ':Attribute 圖片尺寸不正確。',
    'distinct' => ':Attribute 已經存在。',
    'doesnt_end_with' => ':Attribute 不能以下列之一結尾：:values。',
    'doesnt_start_with' => ':Attribute 不能以下列之一開頭：:values。',
    'email' => ':Attribute 必須是有效的 E-mail。',
    'ends_with' => ':Attribute 結尾必須包含下列之一：:values。',
    'enum' => ':Attribute 的值不正確。',
    'exists' => ':Attribute 不存在。',
    'extensions' => ':attribute 欄位必須具有以下副檔名之一：:values。',
    'file' => ':Attribute 必須是有效的檔案。',
    'filled' => ':Attribute 不能留空。',
    'gt' => [
        'array' => ':Attribute 必須多於 :value 個元素。',
        'file' => ':Attribute 必須大於 :value KB。',
        'numeric' => ':Attribute 必須大於 :value。',
        'string' => ':Attribute 必須多於 :value 個字元。',
    ],
    'gte' => [
        'array' => ':Attribute 必須多於或等於 :value 個元素。',
        'file' => ':Attribute 必須大於或等於 :value KB。',
        'numeric' => ':Attribute 必須大於或等於 :value。',
        'string' => ':Attribute 必須多於或等於 :value 個字元。',
    ],
    'hex_color' => ':attribute 字段必須是有效的十六進位顏色。',
    'image' => ':Attribute 必須是一張圖片。',
    'in' => '所選擇的 :attribute 選項無效。',
    'in_array' => ':Attribute 沒有在 :other 中。',
    'integer' => ':Attribute 必須是一個整數。',
    'ip' => ':Attribute 必須是一個有效的 IP 位址。',
    'ipv4' => ':Attribute 必須是一個有效的 IPv4 位址。',
    'ipv6' => ':Attribute 必須是一個有效的 IPv6 位址。',
    'json' => ':Attribute 必須是正確的 JSON 字串。',
    'list' => 'The :attribute field must be a list.',
    'lowercase' => ':Attribute 必須小寫。',
    'lt' => [
        'array' => ':Attribute 必須少於 :value 個元素。',
        'file' => ':Attribute 必須小於 :value KB。',
        'numeric' => ':Attribute 必須小於 :value。',
        'string' => ':Attribute 必須少於 :value 個字元。',
    ],
    'lte' => [
        'array' => ':Attribute 必須少於或等於 :value 個元素。',
        'file' => ':Attribute 必須小於或等於 :value KB。',
        'numeric' => ':Attribute 必須小於或等於 :value。',
        'string' => ':Attribute 必須少於或等於 :value 個字元。',
    ],
    'mac_address' => ':Attribute 必須是一個有效的 MAC 位址。',
    'max' => [
        'array' => ':Attribute 最多有 :max 個元素。',
        'file' => ':Attribute 不能大於 :max KB。',
        'numeric' => ':Attribute 不能大於 :max。',
        'string' => ':Attribute 不能多於 :max 個字元。',
    ],
    'max_digits' => ':Attribute 不得超過 :max 位。',
    'mimes' => ':Attribute 必須為 :values 的檔案。',
    'mimetypes' => ':Attribute 必須為 :values 的檔案。',
    'min' => [
        'array' => ':Attribute 至少有 :min 個元素。',
        'file' => ':Attribute 不能小於 :min KB。',
        'numeric' => ':Attribute 不能小於 :min。',
        'string' => ':Attribute 不能小於 :min 個字元。',
    ],
    'min_digits' => ':Attribute 必須至少有 :min 位數字。',
    'missing' => '必須缺少 :attribute 字段。',
    'missing_if' => '當 :other 為 :value 時，必須缺少 :attribute 字段。',
    'missing_unless' => '必須缺少 :attribute 字段，除非 :other 是 :value。',
    'missing_with' => '存在 :values 時，必須缺少 :attribute 字段。',
    'missing_with_all' => '存在 :values 時，必須缺少 :attribute 字段。',
    'multiple_of' => '所選擇的 :attribute 必須為 :value 中的多個。',
    'not_in' => '所選擇的 :attribute 選項無效。',
    'not_regex' => ':Attribute 的格式錯誤。',
    'numeric' => ':Attribute 必須為一個數字。',
    'password' => [
        'letters' => ':Attribute 必須至少包含一個字母。',
        'mixed' => ':Attribute 必須至少包含一個大寫字母和一個小寫字母。',
        'numbers' => ':Attribute 必須至少包含一個數字。',
        'symbols' => ':Attribute 必須包含至少一個符號。',
        'uncompromised' => '給定的 :attribute 已出現數據洩漏。請選擇不同的 :attribute。',
    ],
    'present' => ':Attribute 必須存在。',
    'present_if' => '當 :other 等於 :value 時，必須存在 :attribute 個欄位。',
    'present_unless' => '除非 :other 等於 :value，否則 :attribute 個字段必須存在。',
    'present_with' => '當 :values 存在時，:attribute 個字段必須存在。',
    'present_with_all' => '當存在 :values 時，必須存在 :attribute 個字段。',
    'prohibited' => ':Attribute 字段被禁止。',
    'prohibited_if' => '当 :other 为 :value 时，:attribute字段被禁止。',
    'prohibited_unless' => ':Attribute 字段被禁止，除非 :other 在 :values 中。',
    'prohibits' => ':Attribute 字段禁止包含 :other。',
    'recaptcha' => ':Attribute 驗證失敗，請再試一次。',
    'regex' => ':Attribute 的格式錯誤。',
    'required' => ':Attribute 不能留空。',
    'required_array_keys' => ':Attribute 必須包含 :values 中的一個鍵。',
    'required_if' => '當 :other 是 :value 時 :attribute 不能留空。',
    'required_if_accepted' => '接受 :other 時需要 :attribute 字段。',
    'required_unless' => '當 :other 不是 :values 時 :attribute 不能留空。',
    'required_with' => '當 :values 出現時 :attribute 不能留空。',
    'required_with_all' => '當 :values 出現時 :attribute 不能為空。',
    'required_without' => '當 :values 留空時 :attribute field 不能留空。',
    'required_without_all' => '當 :values 都不出現時 :attribute 不能留空。',
    'same' => ':Attribute 與 :other 必須相同。',
    'size' => [
        'array' => ':Attribute 必須是 :size 個元素。',
        'file' => ':Attribute 的大小必須是 :size KB。',
        'numeric' => ':Attribute 的大小必須是 :size。',
        'string' => ':Attribute 必須是 :size 個字元。',
    ],
    'starts_with' => ':Attribute 開頭必須包含下列之一：:values。',
    'string' => ':Attribute 必須是一個字串。',
    'timezone' => ':Attribute 必須是一個正確的時區值。',
    'ulid' => ':Attribute 必須是有效的 ULID。',
    'unique' => ':Attribute 已經存在。',
    'uploaded' => ':Attribute 上傳失敗。',
    'uppercase' => ':Attribute 必須大寫。',
    'url' => ':Attribute 的格式錯誤。',
    'uuid' => ':Attribute 必須是有效的 UUID。',
    'attributes' => [
        'address' => '地址',
        'affiliate_url' => '附屬網址',
        'age' => '年齡',
        'amount' => '數量',
        'area' => '區域',
        'available' => '可用的',
        'birthday' => '生日',
        'body' => '身體',
        'city' => '城市',
        'content' => '內容',
        'country' => '國家',
        'created_at' => '創建於',
        'creator' => '創造者',
        'currency' => '貨幣',
        'current_password' => '當前密碼',
        'customer' => '顧客',
        'date' => '日期',
        'date_of_birth' => '出生日期',
        'day' => '天',
        'deleted_at' => '刪除於',
        'description' => '描述',
        'district' => '區',
        'duration' => '期間',
        'email' => 'e-mail',
        'excerpt' => '摘要',
        'filter' => '篩選',
        'first_name' => '名',
        'gender' => '性別',
        'group' => '團體',
        'hour' => '時',
        'image' => '圖片',
        'is_subscribed' => '已訂閱',
        'items' => '專案',
        'last_name' => '姓',
        'lesson' => '課',
        'line_address_1' => '行地址 1',
        'line_address_2' => '行地址 2',
        'message' => '信息',
        'middle_name' => '中間名字',
        'minute' => '分',
        'mobile' => '手機',
        'month' => '月',
        'name' => '名稱',
        'national_code' => '國家代碼',
        'number' => '數字',
        'password' => '密碼',
        'password_confirmation' => '確認密碼',
        'phone' => '電話',
        'photo' => '照片',
        'postal_code' => '郵政編碼',
        'preview' => '預覽',
        'price' => '價格',
        'product_id' => '產品編號',
        'product_uid' => '產品UID',
        'product_uuid' => '產品UUID',
        'promo_code' => '促銷代碼',
        'province' => '省',
        'quantity' => '數量',
        'recaptcha_response_field' => '重新驗證響應字段',
        'remember' => '記住',
        'restored_at' => '恢復於',
        'result_text_under_image' => '圖片下方的結果文本',
        'role' => '角色',
        'second' => '秒',
        'sex' => '性別',
        'shipment' => '運輸',
        'short_text' => '短文',
        'size' => '大小',
        'state' => '狀態',
        'street' => '街道',
        'student' => '學生',
        'subject' => '主題',
        'teacher' => '老師',
        'terms' => '條款',
        'test_description' => '測試說明',
        'test_locale' => '測試語言環境',
        'test_name' => '測試名稱',
        'text' => '文本',
        'time' => '時間',
        'title' => '標題',
        'updated_at' => '更新於',
        'user' => '使用者',
        'username' => '使用者名稱',
        'year' => '年',
    ],
];
