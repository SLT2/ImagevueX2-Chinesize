<?php

/**
 * <strong>Note:</strong> Do not enable SMTP if your email work without it. SMTP support is provided mainly for servers that are unable to send email normally.
 */
$smtp['enabled'] = false;

/**
 * SMTP hosts. All hosts must be separated by a semicolon. You can also specify a different port for each host by using this format: [hostname:port]	(e.g. "smtp1.example.com:25;smtp2.example.com"). Hosts will be tried in order
 */
$smtp['host'] = 'smtp.yourdomain.com';

/**
 * SMTP username
 */
$smtp['username'] = 'salitt';

/**
 * SMTP password
 */
$smtp['password'] = 'salitt';

/**
 * Default SMTP server port, usually 25. (Gmail SSL: 465 / TLS: 587)
 */
$smtp['port'] = 25;

/**
 * Connection prefix. Options are "", "SSL" or "TLS"
 */
$smtp['secure'] = '';

/**
 * SMTP authentication. Utilizes the username and password values
 */
$smtp['auth'] = true;

/**
 * SMTP server timeout in seconds. This function will not work with the win32 version
 */
$smtp['timeout'] = 10;

/**
 * SMTP HELO of the message (host used by default)
 */
$smtp['helo'] = '';

