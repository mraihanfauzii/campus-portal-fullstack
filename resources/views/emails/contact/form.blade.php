<x-mail::message>
# Pesan Baru dari Formulir Kontak

Anda telah menerima pesan baru dari website Campus Portal.

**Nama Pengirim:**<br>
{{ $formData['name'] }}

**Email Pengirim:**<br>
{{ $formData['email'] }}

---

**Isi Pesan:**<br>
{{ $formData['message'] }}

<br>
Terima kasih,<br>
{{ config('app.name') }}
</x-mail::message>