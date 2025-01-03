<div style="max-width: 600px; margin: 0 auto; font-family: Arial, sans-serif; color: #333; line-height: 1.6;">
    <!-- Header -->
    <h1 style="text-align: center; font-size: 24px; font-weight: bold; margin-bottom: 20px;">Thank You For Your Order</h1>

    <!-- Order Details -->
    <h2 style="font-size: 18px; font-weight: bold; margin-bottom: 10px;">Your Order :</h2>
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <tr>
            <td style="text-align: left; font-size: 16px; padding: 5px 0;">Username:</td>
            <td style="text-align: right; font-size: 16px; padding: 5px 0;">{{ $user }}</td>
        </tr>
        <tr>
            <td style="text-align: left; font-size: 16px; padding: 5px 0;">Course:</td>
            <td style="text-align: right; font-size: 16px; padding: 5px 0;">{{ $course }}</td>
        </tr>
        <tr>
            <td style="text-align: left; font-size: 16px; padding: 5px 0;">Transaction Number:</td>
            <td style="text-align: right; font-size: 16px; padding: 5px 0;">{{ $number }}</td>
        </tr>
        <tr>
            <td style="text-align: left; font-size: 16px; padding: 5px 0;">Price:</td>
            <td style="text-align: right; font-size: 16px; padding: 5px 0;">Rp{{ number_format($price, 2) }}</td>
        </tr>
        <tr>
            <td style="text-align: left; font-size: 16px; padding: 5px 0;">Tax:</td>
            <td style="text-align: right; font-size: 16px; padding: 5px 0;">10%</td>
        </tr>
    </table>

    <!-- Divider -->
    <hr style="margin: 20px 0; border: 0; border-top: 1px solid #ccc;">

    <!-- Total -->
    <p style="font-size: 16px; font-weight: bold; margin: 0; text-align: right;">Total: Rp{{ number_format($price * 1.1, 2) }}</p>

    <!-- Notice -->
    <p style="margin-top: 20px; font-size: 14px; color: #555;">
        Notice Something Wrong? Contact our support team and we’ll happy to help.
    </p>

    <!-- Footer -->
    <p style="text-align: center; font-size: 16px; font-weight: bold; margin-top: 40px;">ChineseCourse</p>
</div>