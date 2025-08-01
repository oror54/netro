<?php
// 카드 번호 마스킹 함수
function maskCardNumber($cardNumber)
{
  if (empty($cardNumber) || strlen($cardNumber) < 4) {
    return $cardNumber;
  }

  $length = strlen($cardNumber);
  $masked = substr($cardNumber, 0, 4) . str_repeat('*', $length - 8) . substr($cardNumber, -4);

  return $masked;
}

// 추후 DB 연동 시 이 파일 삭제하거나 DB 호출 코드로 대체
return [
  [
    'bank' => '신한 Hey Young  신한 Hey Young신한 Hey Young신한 Hey Young신한 Hey Young신한 Hey Young신한 Hey Young신한 Hey Young',
    'cardNumber' => '409090124897317',
    'type' => '체크카드',
    'image' => BASE_URL . 'assets/images/user/payment/card/shinhancard_hey_yung.png',
    'isDefault' => true
  ],
  [
    'bank' => '신한카드 Way 체크(미니언즈 여름)',
    'cardNumber' => '409011118888731',
    'type' => '체크카드',
    'image' => BASE_URL . 'assets/images/user/payment/card/shinhancard_way_minions.png',
    'isDefault' => true
  ],
  [
    'bank' => '신한 Deep Dream',
    'cardNumber' => '4790123451178941',
    'type' => '신용카드',
    'image' => BASE_URL . 'assets/images/user/payment/card/shinhancard_deep_dream.png',
    'isDefault' => false
  ],
  [
    'bank' => '신한카드 주거래 신용',
    'cardNumber' => '1030567654245709',
    'type' => '신용카드',
    'image' => BASE_URL . 'assets/images/user/payment/card/shinhancard_main_credit.png',
    'isDefault' => false
  ],
  [
    'bank' => '카카오페이 신한 춘식이 체크',
    'cardNumber' => '7040567891045789',
    'type' => '체크카드',
    'image' => BASE_URL . 'assets/images/user/payment/card/shinhancard_kakaopay_choonsik.png',
    'isDefault' => false
  ],
  [
    'bank' => '신한카드 Simple+',
    'cardNumber' => '4230507800245789',
    'type' => '신용카드',
    'image' => BASE_URL . 'assets/images/user/payment/card/shinhancard_shimple_plus.png',
    'isDefault' => false
  ],
    [
    'bank' => '신한카드 Simple+',
    'cardNumber' => '1230507800245129',
    'type' => '신용카드',
    'image' =>  '',
    'isDefault' => false
  ],
];
