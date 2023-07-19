const Menu = () => {
  return (
    <div className="menu menu-sub-indention menu-column menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-active-bg menu-state-primary menu-arrow-gray-500 fw-semibold fs-6 my-5 mt-lg-2 mb-lg-0" id="kt_aside_menu" data-kt-menu="true">
      <div className="hover-scroll-y me-lg-n5 pe-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="20px" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer">
        <div data-kt-menu-trigger="click" className="menu-item menu-accordion">
          <span className="menu-link">
            <span className="menu-icon">
              {/* Insert SVG icon code here */}
            </span>
            <span className="menu-title">Dashboard</span>
            <span className="menu-arrow"></span>
          </span>
          <div className="menu-sub menu-sub-accordion">
            <div className="menu-item">
              <a className="menu-link" href="apps/customers/getting-started.html">
                <span className="menu-bullet">
                  <span className="bullet bullet-dot"></span>
                </span>
                <span className="menu-title">List Users</span>
              </a>
            </div>
          </div>
          <div className="menu-sub menu-sub-accordion">
            <div className="menu-item">
              <a className="menu-link" href="apps/customers/getting-started.html">
                <span className="menu-bullet">
                  <span className="bullet bullet-dot"></span>
                </span>
                <span className="menu-title">List Pegawai</span>
              </a>
            </div>
          </div>
        </div>
        <div className="menu-item">
          <div className="menu-content">
            <div className="separator mx-1 my-4"></div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default Menu;
