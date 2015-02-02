@extends('Layouts.defaults')
@section('title')
    Vulnerability List
@stop
@section('content')
    <div class="row">
        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item"><a href="http://projects.webappsec.org/Abuse-of-Functionality" target="_blank">Abuse of Functionality</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Brute-Force" target="_blank">Brute Force</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Buffer-Overflow" target="_blank">Buffer Overflow</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Content-Spoofing" target="_blank">Content Spoofing</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Credential-and-Session-Prediction" target="_blank">Credential/Session Prediction</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Cross-Site+Scripting" target="_blank">Cross-Site Scripting</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Cross-Site-Request-Forgery" target="_blank">Cross-Site Request Forgery</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Denial-of-Service" target="_blank">Denial of Service</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Fingerprinting" target="_blank">Fingerprinting</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Format-String" target="_blank">Format String</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/HTTP-Response-Smuggling" target="_blank">HTTP Response Smuggling</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/HTTP-Response-Splitting" target="_blank">HTTP Response Splitting</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/HTTP-Request-Smuggling" target="_blank">HTTP Request Smuggling</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Directory-Indexing" target="_blank">Directory Indexing</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Improper-Filesystem-Permissions" target="_blank">Improper Filesystem Permissions</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Improper-Input-Handling" target="_blank">Improper Input Handling</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Improper-Output-Handling" target="_blank">Improper Output Handling</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Information-Leakage" target="_blank">Information Leakage</a></li>
            </ul>
         </div>

        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item"><a href="http://projects.webappsec.org/HTTP-Request-Splitting" target="_blank">HTTP Request Splitting</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Integer-Overflows" target="_blank">Integer Overflows</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/LDAP-Injection" target="_blank">LDAP Injection</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Mail-Command-Injection" target="_blank">Mail Command Injection</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Null-Byte-Injection" target="_blank">Null Byte Injection</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/OS-Commanding" target="_blank">OS Commanding</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Path-Traversal" target="_blank">Path Traversal</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Predictable-Resource-Location" target="_blank">Predictable Resource Location</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Remote-File-Inclusion" target="_blank">Remote File Inclusion (RFI)</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Routing-Detour" target="_blank">Routing Detour</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Session-Fixation" target="_blank">Session Fixation</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/SOAP-Array-Abuse" target="_blank">SOAP Array Abuse</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/SSI-Injection" target="_blank">SSI Injection</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Insecure-Indexing" target="_blank">Insecure Indexing</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Insufficient+Anti-automation" target="_blank">Insufficient Anti-automation</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Insufficient-Authentication" target="_blank">Insufficient Authentication</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Insufficient-Authorization" target="_blank">Insufficient Authorization</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Insufficient-Password-Recovery" target="_blank">Insufficient Password Recovery</a></li>
            </ul>
        </div>

        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item"><a href="http://projects.webappsec.org/SQL-Injection" target="_blank">SQL Injection</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/URL-Redirector-Abuse" target="_blank">URL Redirector Abuse </a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/XPath-Injection" target="_blank">XPath Injection</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/XML-Attribute-Blowup" target="_blank">XML Attribute Blowup</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/XML-External-Entities" target="_blank">XML External Entities</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/XML-Entity-Expansion" target="_blank">XML Entity Expansion </a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/XML-Injection" target="_blank">XML Injection</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/XQuery-Injection" target="_blank">XQuery Injection</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Remote-File-Inclusion" target="_blank">Remote File Inclusion (RFI)</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Routing-Detour" target="_blank">Routing Detour</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Session-Fixation" target="_blank">Session Fixation</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/SOAP-Array-Abuse" target="_blank">SOAP Array Abuse</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/SSI-Injection" target="_blank">SSI Injection</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Insufficient-Process-Validation" target="_blank">Insufficient Process Validation</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Insufficient-Session-Expiration" target="_blank">Insufficient Session Expiration</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Insufficient-Transport-Layer-Protection" target="_blank">Insufficient Transport Layer Protection</a></li>
                <li class="list-group-item"><a href="http://projects.webappsec.org/Server-Misconfiguration" target="_blank">Server Misconfiguration</a></li>

            </ul>
        </div>
    </div>
@stop