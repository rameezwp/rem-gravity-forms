# REM - Gravity Forms Dynamic Fields

Automatically populate Gravity Forms fields dynamically from `rem_property` listings.

This plugin is useful for real estate websites using:

- Gravity Forms
- Real Estate Manager Pro

It automatically fills form fields with:

- Agent Email
- Listing Title
- Agent Phone

---

# Features

- Automatically detects current `rem_property`
- Gets listing author information
- Supports Gravity Forms dynamic population
- Lightweight and simple
- No settings page required

---

# Requirements

- WordPress
- Gravity Forms
- A custom post type named `rem_property`

---

# Installation

## Method 1 — Upload ZIP

1. Download plugin ZIP
2. Go to:

   **WordPress Admin → Plugins → Add New → Upload Plugin**

3. Upload ZIP
4. Activate plugin

---

## Method 2 — Manual Installation

1. Create folder:

```text
/wp-content/plugins/rem-gravity-forms/
```

2. Add plugin file:

```text
rem-gravity-forms.php
```

3. Paste plugin code into file
4. Activate plugin from Plugins page

---

# Gravity Forms Setup

You must create hidden fields in your Gravity Form.

## Step 1 — Add Hidden Fields

Edit your Gravity Form and add:

- Hidden Field - Agent Email
- Hidden Field - Listing Title
- Hidden Field - Agent Phone

---

## Step 2 — Enable Dynamic Population

For EACH hidden field:

1. Open field settings
2. Go to:

```text
Advanced
```

3. Enable:

```text
Allow field to be populated dynamically
```

4. Add parameter name

---

# Required Parameter Names

Use EXACTLY these parameter names.

| Purpose | Parameter Name |
|---|---|
| Agent Email | `agent_email` |
| Listing Title | `listing_title` |
| Agent Phone | `agent_phone` |

---

# Data Sources

| Field | Source |
|---|---|
| Agent Email | Post author email |
| Listing Title | Current property title |
| Agent Phone | User meta: `rem_mobile_url` |

---

# Example Usage

You can use these hidden fields for:

- Contact agent forms
- Inquiry forms
- Lead management
- CRM integrations
- Email notifications
- Auto-routing inquiries to agents

---

# Example Email Notification

You can use Gravity Forms merge tags:

```text
Agent Email: {Agent Email:1}
Listing Title: {Listing Title:2}
Agent Phone: {Agent Phone:3}
```

(Field IDs will vary on your form.)

---

# Works Only On

This plugin populates fields only on:

```text
Single rem_property pages
```

Example:

```text
https://example.com/property/beautiful-villa/
```

---

# Developer Notes

The plugin uses Gravity Forms dynamic population filters:

```php
gform_field_value_agent_email
gform_field_value_listing_title
gform_field_value_agent_phone
```

---

# Customization

If your phone meta key is different, edit:

```php
get_user_meta( $author_id, 'rem_mobile_url', true );
```

Replace:

```php
rem_mobile_url
```

with your own user meta key.

---

# License

GPL2

---

# Support

Please open an issue on GitHub for bugs or feature requests.