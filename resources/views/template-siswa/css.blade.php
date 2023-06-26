<style>
    font-style: normal;
    font-weight: 700;
    font-size: 14px;
    line-height: 17px;
    }

    .table> :not(:last-child)> :last-child>* {
        border-bottom-color: #e9ecef;
    }

    .table.align-items-center td,
    .table.align-items-center th {
        vertical-align: middle;
    }

    .table thead th {
        padding: 0.75rem 1.5rem;
        text-transform: capitalize;
        letter-spacing: 0px;
        border-bottom: 1px solid #e9ecef;
        border-bottom-color: rgb(233, 236, 239);
    }

    .table td,
    .table th {
        white-space: nowrap;
    }

    .table th {
        font-weight: 600;
    }

    .table> :not(caption)>*>* {
        padding: 0.5rem 0.5rem;
        background-color: var(--bs-table-bg);
        border-bottom-width: 1px;
        box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
    }

    .text-secondary {
        color: #8392ab !important;
    }

    .text-uppercase {
        text-transform: uppercase !important;
    }

    html * {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    thead,
    tbody,
    tfoot,
    tr,
    td,
    th {
        border-color: inherit;
        border-bottom-color: inherit;
        border-style: solid;
        border-bottom-style: solid;
        border-width: 0;
        border-bottom-width: 0px;
    }

    th {
        text-align: inherit;
        text-align: -webkit-match-parent;
    }

    *,
    ::before,
    ::after {
        box-sizing: border-box;
    }

    .table {
        --bs-table-color: #67748e;
        --bs-table-bg: transparent;
        --bs-table-border-color: #e9ecef;
        --bs-table-accent-bg: transparent;
        --bs-table-striped-color: #67748e;
        --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
        --bs-table-active-color: #67748e;
        --bs-table-active-bg: rgba(0, 0, 0, 0.1);
        --bs-table-hover-color: #67748e;
        --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
        color: var(--bs-table-color);
    }

    table {
        caption-side: bottom;
        border-collapse: collapse;
    }

    .card .card-body {
        font-family: "Open Sans", sans-serif;
    }

    .card-body {
        color: var(--bs-card-color);
    }

    .card {
        --bs-card-spacer-y: 1rem;
        --bs-card-spacer-x: 1rem;
        --bs-card-title-spacer-y: 0.5rem;
        --bs-card-border-width: 0;
        --bs-card-border-color: rgba(0, 0, 0, 0.125);
        --bs-card-border-radius: 1rem;
        --bs-card-box-shadow: 0 0 2rem 0 rgba(136, 152, 170, 0.15);
        --bs-card-inner-border-radius: 1rem;
        --bs-card-cap-padding-y: 0.5rem;
        --bs-card-cap-padding-x: 1rem;
        --bs-card-cap-bg: #fff;
        --bs-card-cap-color: ;
        --bs-card-height: ;
        --bs-card-color: ;
        --bs-card-bg: #fff;
        --bs-card-img-overlay-padding: 1rem;
        --bs-card-group-margin: 0.75rem;
        word-wrap: break-word;
    }

    .row {
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 0;
    }

    .container,
    .container-fluid,
    .container-sm,
    .container-md,
    .container-lg,
    .container-xl,
    .container-xxl {
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 0;
    }

    -moz-focus-inner {
        padding: 0;
        border-style: none;
    }

    .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-bottom: 0;
        border-left: 0.3em solid transparent;
    }

    element {
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .btn:hover:not(.btn-icon-only) {
        box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
        transform: translateY(-1px);
    }

    .btn:not([class*="btn-outline-"]) {
        border: 0;
    }

    .btn:hover {
        color: var(--bs-btn-hover-color);
        background-color: var(--bs-btn-hover-bg);
        border-color: var(--bs-btn-hover-border-color);
    }

    button:not(:disabled),
    [type="button"]:not(:disabled),
    [type="reset"]:not(:disabled),
    [type="submit"]:not(:disabled) {
        cursor: pointer;
    }

    .btn {
        margin-bottom: 1rem;
        letter-spacing: -0.025rem;
        text-transform: none;
        box-shadow: 0 4px 6px rgba(50, 50, 93, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
    }

    .dropdown-toggle {
        white-space: nowrap;
    }

    .btn {
        --bs-btn-padding-x: 1.25rem;
        --bs-btn-padding-y: 0.625rem;
        --bs-btn-font-family: ;
        --bs-btn-font-size: 0.875rem;
        --bs-btn-font-weight: 700;
        --bs-btn-line-height: 1.5;
        --bs-btn-color: #67748e;
        --bs-btn-bg: transparent;
        --bs-btn-border-width: 1px;
        --bs-btn-border-color: transparent;
        --bs-btn-border-radius: 0.5rem;
        --bs-btn-box-shadow: 0 4px 6px rgba(50, 50, 93, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
        --bs-btn-disabled-opacity: 0.65;
        --bs-btn-focus-box-shadow: 0 0 0 0.2rem rgba(var(--bs-btn-focus-shadow-rgb), .5);
        display: inline-block;
        padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
        font-family: var(--bs-btn-font-family);
        font-size: var(--bs-btn-font-size);
        font-weight: var(--bs-btn-font-weight);
        line-height: var(--bs-btn-line-height);
        color: var(--bs-btn-color);
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        user-select: none;
        border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
        border-radius: var(--bs-btn-border-radius);
        background-color: var(--bs-btn-bg);
        transition: all 0.15s ease-in;
    }

    .bg-gradient-primary {
        background-image: linear-gradient(310deg, #5e72e4 0%, #825ee4 100%);
    }

    .badge {
        text-transform: uppercase;
    }

    .dropdown-item:hover,
    .dropdown-item:focus {
        color: var(--bs-dropdown-link-hover-color);
        background-color: var(--bs-dropdown-link-hover-bg);
    }

    a:hover {
        color: var(--bs-link-hover-color);
        text-decoration: none;
    }

    @media (min-width: 992px) .dropdown-item {
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .dropdown-item {
        display: block;
        width: 100%;
        padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
        clear: both;
        font-weight: 400;
        color: var(--bs-dropdown-link-color);
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
    }

    a {
        letter-spacing: -0.025rem;
        color: #344767;
    }

    .badge {
        --bs-badge-padding-x: 0.9em;
        --bs-badge-padding-y: 0.55em;
        --bs-badge-font-size: 0.75em;
        --bs-badge-font-weight: 700;
        --bs-badge-color: #fff;
        --bs-badge-border-radius: 0.45rem;
        display: inline-block;
        padding: var(--bs-badge-padding-y) var(--bs-badge-padding-x);
        font-size: var(--bs-badge-font-size);
        font-weight: var(--bs-badge-font-weight);
        line-height: 1;
        color: var(--bs-badge-color);
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: var(--bs-badge-border-radius, 0);
    }

        {
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        line-height: 17px;
    }

    .table> :not(:last-child)> :last-child>* {
        border-bottom-color: #e9ecef;
    }

    .table.align-items-center td,
    .table.align-items-center th {
        vertical-align: middle;
    }

    .table thead th {
        padding: 0.75rem 1.5rem;
        text-transform: capitalize;
        letter-spacing: 0px;
        border-bottom: 1px solid #e9ecef;
        border-bottom-color: rgb(233, 236, 239);
    }

    .table td,
    .table th {
        white-space: nowrap;
    }

    .table th {
        font-weight: 600;
    }

    .table> :not(caption)>*>* {
        padding: 0.5rem 0.5rem;
        background-color: var(--bs-table-bg);
        border-bottom-width: 1px;
        box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
    }

    .text-secondary {
        color: #8392ab !important;
    }

    .text-uppercase {
        text-transform: uppercase !important;
    }

    html * {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    thead,
    tbody,
    tfoot,
    tr,
    td,
    th {
        border-color: inherit;
        border-bottom-color: inherit;
        border-style: solid;
        border-bottom-style: solid;
        border-width: 0;
        border-bottom-width: 0px;
    }

    th {
        text-align: inherit;
        text-align: -webkit-match-parent;
    }

    *,
    ::before,
    ::after {
        box-sizing: border-box;
    }

    .table {
        --bs-table-color: #67748e;
        --bs-table-bg: transparent;
        --bs-table-border-color: #e9ecef;
        --bs-table-accent-bg: transparent;
        --bs-table-striped-color: #67748e;
        --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
        --bs-table-active-color: #67748e;
        --bs-table-active-bg: rgba(0, 0, 0, 0.1);
        --bs-table-hover-color: #67748e;
        --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
        color: var(--bs-table-color);
    }

    table {
        caption-side: bottom;
        border-collapse: collapse;
    }

    .card .card-body {
        font-family: "Open Sans", sans-serif;
    }

    .card-body {
        color: var(--bs-card-color);
    }

    .card {
        --bs-card-spacer-y: 1rem;
        --bs-card-spacer-x: 1rem;
        --bs-card-title-spacer-y: 0.5rem;
        --bs-card-border-width: 0;
        --bs-card-border-color: rgba(0, 0, 0, 0.125);
        --bs-card-border-radius: 1rem;
        --bs-card-box-shadow: 0 0 2rem 0 rgba(136, 152, 170, 0.15);
        --bs-card-inner-border-radius: 1rem;
        --bs-card-cap-padding-y: 0.5rem;
        --bs-card-cap-padding-x: 1rem;
        --bs-card-cap-bg: #fff;
        --bs-card-cap-color: ;
        --bs-card-height: ;
        --bs-card-color: ;
        --bs-card-bg: #fff;
        --bs-card-img-overlay-padding: 1rem;
        --bs-card-group-margin: 0.75rem;
        word-wrap: break-word;
    }

    .row {
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 0;
    }

    .font-weight-bold {
        font-weight: 600 !important;
    }

    .text-xs {
        font-size: 0.75rem !important;
    }

    .text-xs {
        line-height: 1.25;
    }

    .text-uppercase {
        text-transform: uppercase !important;
    }

    .px-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
    }

    .mb-0 {
        margin-bottom: 0 !important;
    }

    -moz-focus-inner {
        padding: 0;
        border-style: none;
    }

    element {
        border: none;
    }

    .badge.bg-primary {
        background: #5e72e4;
        background-color: rgb(94, 114, 228);
    }

    button:not(:disabled),
    [type="button"]:not(:disabled),
    [type="reset"]:not(:disabled),
    [type="submit"]:not(:disabled) {
        cursor: pointer;
    }

    .badge {
        text-transform: uppercase;
    }

    .bg-primary {
        background-color: #5e72e4 !important;
    }

    .badge {
        --bs-badge-padding-x: 0.9em;
        --bs-badge-padding-y: 0.55em;
        --bs-badge-font-size: 0.75em;
        --bs-badge-font-weight: 700;
        --bs-badge-color: #fff;
        --bs-badge-border-radius: 0.45rem;
        display: inline-block;
        padding: var(--bs-badge-padding-y) var(--bs-badge-padding-x);
        font-size: var(--bs-badge-font-size);
        font-weight: var(--bs-badge-font-weight);
        line-height: 1;
        color: var(--bs-badge-color);
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: var(--bs-badge-border-radius, 0);
    }

        {
        width: 88px;
    }

    .badge.bg-danger {
        background: #f5365c;
        background-color: rgb(245, 54, 92);
    }

    .badge {
        text-transform: uppercase;
    }

    .bg-danger {
        background-color: #f5365c !important;
    }

    .badge {
        --bs-badge-padding-x: 0.9em;
        --bs-badge-padding-y: 0.55em;
        --bs-badge-font-size: 0.75em;
        --bs-badge-font-weight: 700;
        --bs-badge-color: #fff;
        --bs-badge-border-radius: 0.45rem;
        display: inline-block;
        padding: var(--bs-badge-padding-y) var(--bs-badge-padding-x);
        font-size: var(--bs-badge-font-size);
        font-weight: var(--bs-badge-font-weight);
        line-height: 1;
        color: var(--bs-badge-color);
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: var(--bs-badge-border-radius, 0);
    }

    .table.align-items-center td,
    .table.align-items-center th {
        vertical-align: middle;
    }

    .table td,
    .table th {
        white-space: nowrap;
    }

    .table> :not(caption)>*>* {
        padding: 0.5rem 0.5rem;
        background-color: var(--bs-table-bg);
        border-bottom-width: 1px;
        box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
    }
</style>
