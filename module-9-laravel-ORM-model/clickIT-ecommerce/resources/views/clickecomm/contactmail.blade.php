    <!-- Main Container -->
    <table
      width="100%"
      cellpadding="0"
      cellspacing="0"
      border="0"
      style="max-width:650px; background-color:#ffffff; border-radius:16px; overflow:hidden;"
    >

      <!-- Header -->
      <tr>
        <td style="background-color:#0f172a; padding:35px 40px; text-align:center;">

          <h1 style="margin:0; color:#ffffff; font-size:26px; line-height:36px;">
            New Contact Message
          </h1>

          <p style="margin:10px 0 0; color:#cbd5e1; font-size:15px; line-height:24px;">
            You have received a new message from your website.
          </p>

        </td>
      </tr>

      <!-- Content -->
      <tr>
        <td style="padding:40px;">

          <h2 style="margin:0 0 25px; font-size:20px; color:#0f172a;">
            Contact Details
          </h2>

          <!-- Full Name -->
          <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:15px;">
            <tr>
              <td
                width="140"
                style="padding:12px 0; font-size:14px; font-weight:bold; color:#64748b; vertical-align:top;"
              >
                Full Name
              </td>

              <td
                style="padding:12px 0; font-size:15px; color:#0f172a; vertical-align:top;"
              >
                {{$data->fullname}}
              </td>
            </tr>
          </table>


          <!-- Email -->
          <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:15px;">
            <tr>
              <td
                width="140"
                style="padding:12px 0; font-size:14px; font-weight:bold; color:#64748b; vertical-align:top;"
              >
                Email
              </td>

              <td
                style="padding:12px 0; font-size:15px; vertical-align:top;"
              >
                <a
                  href="mailto:{{$data->email}}"
                  style="color:#2563eb; text-decoration:none;"
                >
                  {{$data->email}}
                </a>
              </td>
            </tr>
          </table>


            <!-- Email -->
          <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:15px;">
            <tr>
              <td
                width="140"
                style="padding:12px 0; font-size:14px; font-weight:bold; color:#64748b; vertical-align:top;"
              >
                Subject
              </td>

              <td
                style="padding:12px 0; font-size:15px; vertical-align:top;"
              >
                <a
                  href="mailto:{{$data->email}}"
                  style="color:#2563eb; text-decoration:none;"
                >
                  {{$data->subject}}
                </a>
              </td>
            </tr>
          </table>

          <!-- Phone -->
          <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:25px;">
            <tr>
              <td
                width="140"
                style="padding:12px 0; font-size:14px; font-weight:bold; color:#64748b; vertical-align:top;"
              >
                Phone
              </td>

              <td
                style="padding:12px 0; font-size:15px; color:#0f172a; vertical-align:top;"
              >
                <a
                  href="tel:{{$data->phone}}"
                  style="color:#0f172a; text-decoration:none;"
                >
                  {{$data->phone}}
                </a>
              </td>
            </tr>
          </table>

          <!-- Divider -->
          <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
              <td style="height:1px; background-color:#e2e8f0; font-size:0; line-height:0;">
                &nbsp;
              </td>
            </tr>
          </table>

          <!-- Message -->
          <h2 style="margin:30px 0 12px; font-size:20px; color:#0f172a;">
            Message
          </h2>

          <div
            style="
              background-color:#f8fafc;
              border:1px solid #e2e8f0;
              border-radius:12px;
              padding:20px;
              font-size:15px;
              line-height:26px;
              color:#334155;
              white-space:pre-line;
            "
          >
            {{$data->message}}
          </div>

          <!-- Reply Button -->
          <table
            cellpadding="0"
            cellspacing="0"
            border="0"
            style="margin-top:30px;"
          >
            <tr>
              <td
                style="
                  background-color:#2563eb;
                  border-radius:10px;
                "
              >
                <a
                  href="mailto:{{$data->email}}"
                  style="
                    display:inline-block;
                    padding:14px 24px;
                    color:#ffffff;
                    font-size:14px;
                    font-weight:bold;
                    text-decoration:none;
                  "
                >
                  Reply to {{$data->fullname}}
                </a>
              </td>
            </tr>
          </table>

        </td>
      </tr>

      <!-- Footer -->
      <tr>
        <td
          style="
            background-color:#f8fafc;
            border-top:1px solid #e2e8f0;
            padding:25px 40px;
            text-align:center;
          "
        >

          <p
            style="
              margin:0;
              color:#64748b;
              font-size:13px;
              line-height:22px;
            "
          >
            This email was sent from your website contact form.
          </p>

          <p
            style="
              margin:8px 0 0;
              color:#94a3b8;
              font-size:12px;
            "
          >
            © 2026 Your Company. All rights reserved.
          </p>

        </td>
      </tr>

    </table>

  </td>
</tr>
