<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ใบแจ้งหนี้</title>
    <style>
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
        }

        body {
            font-family: "THSarabunNew";
            margin: 0;
            padding: 0;
        }


        header {
            text-align: center;
            margin-bottom: 20px;
        }

        header h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        header img {
            width: 200px;
            height: auto;
        }

        .invoice-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .invoice-number,
        .invoice-date,
        .customer-info {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .invoice-items {
            margin-bottom: 20px;
        }

        .invoice-items table {
            width: 100%;
            border-collapse: collapse;
        }

        .invoice-items th,
        .invoice-items td {
            padding: 8px;
            border: 1px solid #ccc;
            text-align: left;
        }

        .invoice-total {
            text-align: right;
        }

        .invoice-total .subtotal,
        .invoice-total .vat,
        .invoice-total .total {
            font-weight: bold;
            margin-bottom: 5px;
        }

        footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header>
        <h1>ใบแจ้งหนี้</h1>
        <img src="logo.png" alt="โลโก้บริษัท">
    </header>

    <section class="invoice-info">
        <div class="invoice-number">
            เลขที่ใบแจ้งหนี้: #12345
        </div>
        <div class="invoice-date">
            วันที่: 13 พฤษภาคม 2567
        </div>
        <div class="customer-info">
            ชื่อลูกค้า: บริษัท XYZ จำกัด
            ที่อยู่: 123 ถนนสุขุมวิท กรุงเทพมหานคร 10110
            เลขประจำตัวผู้เสียภาษี: 01234567891234
        </div>
    </section>

    <section class="invoice-items">
        <table>
            <thead>
                <tr>
                    <th>รายการ</th>
                    <th>จำนวน</th>
                    <th>ราคาต่อหน่วย</th>
                    <th>จำนวนเงิน</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>เว็บไซต์</td>
                    <td>1</td>
                    <td>10,000 บาท</td>
                    <td>10,000 บาท</td>
                </tr>
                <tr>
                    <td>ออกแบบโลโก้</td>
                    <td>1</td>
                    <td>5,000 บาท</td>
                    <td>5,000 บาท</td>
                </tr>
                <tr>
                    <td>รวม</td>
                    <td></td>
                    <td></td>
                    <td>15,000 บาท</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="invoice-total">
        <div class="subtotal">
            ราคาย่อย: 15,000 บาท
        </div>
        <div class="vat">
            ภาษีมูลค่าเพิ่ม (7%): 1,050 บาท
        </div>
        <div class="total">
            **รวม:** 16,050 บาท
        </div>
    </section>

    <footer>
        <p>ขอบคุณที่ใช้บริการ</p>
        <p>ติดต่อเรา: [email protected]</p>
    </footer>
</body>

</html>
