@extends('layout.app')
@section('page_title', 'Services')
@section('panel_style','top_panel_style_7')
@section('hero')
    <section class="top_panel_image top_panel_image_1" style="background-image: url(../images/faq.jpg);">
        <div class="top_panel_image_hover"></div>
        <div class="top_panel_image_header">
            <h1 class="top_panel_image_title">Our Services</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{URL::to('/')}}">Home</a> <span class="breadcrumbs_delimiter"></span> <span class="breadcrumbs_item current">Our Services</span>
            </div>
        </div>
    </section>
@endsection
@section('welcome')
    <div class="sc_section custom_bg_2">
        <div class="content_wrap">
            <div class="sc_empty_space" data-height="2.2em" style="height: 2.2em;"></div>
            <div class="sc_section margin_top_huge margin_bottom_huge">
                <div class="sc_section_inner">
                    <h2 class="sc_section_title sc_item_title">What We Do</h2>
                    <div class="sc_section_descr sc_item_descr">
                        Want to invest your spare money? Want to earn more than the banks <br>
                        give you? Stop searching; invest with Trustuk Fund Group LTD now
                    </div>
                    <div class="sc_empty_space" data-height="0.7em" style="height: 0.7em;"></div>
                    <div class="columns_wrap sc_columns margin_top_tiny">
                        <div class="column-1_2 sc_column_item">
                            <figure class="sc_image style_img">
                                <img alt="" class="first" src="images/home_1.jpg"> <img alt="" class="second" src="images/img1.jpg">
                            </figure>
                        </div>
                        <div class="column-1_2 sc_column_item">
                            <div class="sc_empty_space" data-height="1.5em" style="height: 1.5em;"></div>
                            <span>
                                We are working as an investment pool, collecting multiple lower value investments
                                and grouping them into one single HUGE investment, using those funds to invest
                                into securities with major concentration in mutual funds and generate outstanding
                                returns. We then share back a portion of our revenue to our customers, who made an
                                investment
                            </span>
                            <h4 class="sc_title sc_title_regular margin_top_small margin_bottom_tiny">Need Further Explanation?</h4>
                            <span>
                                Still have questions that you would like answers to? Then leave us a message. <br></span> <a class="sc_button sc_button_style_filled sc_button_size_medium margin_top_small margin_bottom_small" href="{{URL::to('/contact')}}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sc_empty_space" data-height="2em" style="height: 2em;"></div>
        </div>
    </div>
@endsection
@section('main_services')
    <div class="sc_section">
        <div class="content_wrap">
            <div class="sc_empty_space" data-height="2.2em" style="height: 2.2em;"></div>
            <div class="sc_section margin_top_huge margin_bottom_huge">
                <div class="sc_section_inner">
                    <h2 class="sc_section_title sc_item_title">Mutual Funds</h2>
                    <div class="sc_section_descr sc_item_descr">
                        A Mutual Fund is a collective investment scheme that pools<br>
                        the assets of its investors and invests the money on behalf <br>
                        of those investors.
                    </div>
                    <div class="sc_empty_space" data-height="0.7em" style="height: 0.7em;"></div>
                    <div class="columns_wrap sc_columns margin_top_tiny">
                        <div class="sc_empty_space" data-height="1.5em" style="height: 1.5em;"></div>
                        <span>
                            A Mutual Fund is a collective investment scheme that pools the assets of
                            its investors and invests the money on behalf of those investors. The
                            underlying logic of mutual funds is that they provide diverse investments -
                            in stocks, bonds and cash -  without requiring investors to make separate
                            purchases and trades.
                        </span>
                        <p>
                            Mutual Funds allow investors to pool their money together with other investors
                            to purchase a collection of stocks, bonds, or other securities that might be
                            difficult to recreate on their own. This is often referred to as portfolio.
                            The price of the mutual fund, also known as its Net Asset Value (NAV), is
                            determined by the total value of the securites in the portfolio, divided by
                            the number of the fund's outstanding shares.
                        </p>
                        <p>
                            The price fluctuates based on the value of the securities held by the portfolio
                            at the end of each business day. Note that mutual fund investors do not actually
                            own the securites in which the fund invests; they only own shares in the fund
                            itself.
                        </p>


                    </div>
                </div>
            </div>
            <div class="sc_empty_space" data-height="2em" style="height: 2em;"></div>
        </div>
    </div>
@endsection
@section('testimonial')
    <div class="sc_section custom_bg_2">
        <div class="content_wrap">
            <div class="sc_empty_space" data-height="2.2em"></div>
            <div class="sc_section margin_top_huge margin_bottom_huge">
                <h3>Advantages of investing in a Mutual Fund</h3>
                <ul>
                    <li>
                        Increased diversification: A fund must hold many securities.
                        Diversifying reduces risks compared to holding a single stock, bond,
                        and other available instruments.
                    </li>
                    <li>
                        Professional investment management: A highly variable fund manager has
                        the staff and technical know-how to invest the funds effectively.
                    </li>
                    <li>
                        Ability to participate in investments that may be available only to larger
                        investor.
                    </li>
                    <li>
                        Service and convenience: This is not a feature of a mutual fund, but rather
                        a feature of the fund management company
                    </li>
                </ul>
            </div>
            <div class="sc_section margin_top_huge margin_bottom_huge">
                <h3>Our Packages Insights</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Fund Name</th>
                        <th>Fund maybe suitable if</th>
                        <th>Fund objective</th>
                        <th>Risk</th>
                        <th>Investment Objectives</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            TUF EXCHANGE-TRADED FUND/STARTER
                        </td>
                        <td>
                            You're looking for a highly liquid short term investment with
                            the potential of earning a return higher than a bank savings
                            account
                        </td>
                        <td>
                            Liquidity and preservation of capital
                        </td>
                        <td>
                            Low
                        </td>
                        <td>
                            Is to earn a high rate of interest income and at same time to
                            preserve capital and maintain liquidity by investing primarily
                            in moeny market instruments, generally maturing in not more than
                            91 days
                        </td>
                    </tr>
                    <tr>
                        <td>
                            TUF FIXED MATURITY
                        </td>
                        <td>
                            You want to make a lump sum investment from which you would require
                            periodic over a number of years or you want to build up a fund for a
                            period of time from which you would later on require periodic income
                            over a number of years
                        </td>
                        <td>
                            Preservation and growth of capital
                        </td>
                        <td>
                            Medium
                        </td>
                        <td>
                            The objective of the fund is to preserve and enhance shareholders
                            capital and to meet medium-to-long term income goals of
                            shareholders and accepted maturity is not more than 1 year.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            TUF EQUITY FUND OF FUNDS
                        </td>
                        <td>
                            You have a longer time (5 years +) and seek potential returns through
                            equity exposure
                        </td>
                        <td>
                            Long-term capital growth
                        </td>
                        <td>
                            High
                        </td>
                        <td>
                            The investment objective of this is to provide long term capital
                            appreciation and dividend distribution through investment in a
                            diversified portfolio
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="sc_empty_space" data-height="2em"></div>
        </div>
    </div>
@endsection
@section('gallery')
    <div class="sc_section custom_bg_2">
        <div class="content_wrap">
            <div class="sc_empty_space" data-height="16px" style="height: 16px;"></div>
            <div class="sc_section margin_bottom_medium animated zoomIn normal" data-animation="animated zoomIn normal">
                <div class="sc_section_inner">
                    <div class="sc_section_content_wrap">
                        <h2 class="sc_title sc_title_regular margin_top_null margin_bottom_medium">Price Table</h2>
                        <div class="columns_wrap sc_columns no_margins">
                            <div class="column-1_4 sc_column_item">
                                <div class="sc_price_wrap">
                                    <div class="sc_price_block sc_price_block_style_1">
                                        <div class="first">
                                            <div class="sc_price_block_title">
                                                <span style="font-size: .9em">TUF EXCHANGE TRADED FUND</span>
                                            </div>
                                        </div>
                                        <div class="sc_price_block_money">
                                            <div class="sc_price">
                                                <span class="sc_price_currency">$</span><span class="sc_price_money">150 - 3000</span>
                                            </div>
                                            <div class="sc_price_des">
                                                This plan is for a duration of <b>91 Days</b> and is at a rate of <b>125%</b>
                                            </div>
                                        </div>
                                        <div class="sc_price_block_link">
                                            <a class="sc_button sc_button_style_filled sc_button_size_medium" href="#">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column-1_4 sc_column_item">
                                <div class="sc_price_wrap">
                                    <div class="sc_price_block sc_price_block_style_1">
                                        <div class="first">
                                            <div class="sc_price_block_title">
                                                <span>TUF STARTER</span>
                                            </div>
                                        </div>
                                        <div class="sc_price_block_money">
                                            <div class="sc_price">
                                                <span class="sc_price_currency">$</span><span class="sc_price_money">300 - 2500</span>
                                            </div>
                                            <div class="sc_price_des">
                                                The duration for this plan is <b>monthly for 90 days</b> and at a rate of <b>30%</b>
                                            </div>
                                        </div>
                                        <div class="sc_price_block_link">
                                            <a class="sc_button sc_button_style_filled sc_button_size_medium" href="#">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column-1_4 sc_column_item">
                                <div class="sc_price_wrap">
                                    <div class="sc_price_block sc_price_block_style_1">
                                        <div class="first">
                                            <div class="sc_price_block_title">
                                                <span>TUF FIXED MATURITY</span>
                                            </div>
                                        </div>
                                        <div class="sc_price_block_money">
                                            <div class="sc_price">
                                                <span class="sc_price_currency">$</span><span class="sc_price_money">5000-15000</span>
                                            </div>
                                            <div class="sc_price_des">
                                                This plan is for a duration of <b>365 Days</b> and at a rate of <b>170%</b>
                                            </div>
                                        </div>
                                        <div class="sc_price_block_link">
                                            <a class="sc_button sc_button_style_filled sc_button_size_medium" href="#">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column-1_4 sc_column_item">
                                <div class="sc_price_wrap">
                                    <div class="sc_price_block sc_price_block_style_1">
                                        <div class="first">
                                            <div class="sc_price_block_title">
                                                <span>EQUITY FUND OF FUNDS</span>
                                            </div>
                                        </div>
                                        <div class="sc_price_block_money">
                                            <div class="sc_price">
                                                <span class="sc_price_currency">$</span><span class="sc_price_money" style="font-size: 1.5rem;">10000 - 30000</span>
                                            </div>
                                            <div class="sc_price_des">
                                                The duration of this plan is a <b>Lifetime</b> and the rate is <b>Dividend</b>
                                            </div>
                                        </div>
                                        <div class="sc_price_block_link">
                                            <a class="sc_button sc_button_style_filled sc_button_size_medium" href="#">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('advice')
    <div class="sc_section">
        <div class="content_wrap">
            <div class="sc_empty_space" data-height="2.2em" style="height: 2.2em;"></div>
            <div class="sc_section margin_top_huge margin_bottom_huge">
                <div class="sc_section_inner">
                    <h2 class="sc_section_title sc_item_title">Our Terms &amp; Conditions</h2>
                    <div class="sc_section_descr sc_item_descr">
                        Please read the following rules carefully before creating an <br>
                        account
                    </div>
                    <div class="sc_empty_space" data-height="0.7em" style="height: 0.7em;"></div>
                    <div class="columns_wrap sc_columns margin_top_tiny">
                        <h4>General Rules</h4>
                        <ul>
                            <ol>
                                <li>
                                    This document was created in accordance with the rules
                                    of international law and business practice.
                                </li>
                                <li>
                                    The system accepts legal capable individuals over the age
                                    of 18 to be a client of TUF Group.
                                </li>
                                <li>
                                    The registration procedure is necessary for each client of
                                    TUF Group.
                                </li>
                                <li>
                                    By being a client of TUF Group, you agree with the rules in
                                    this document.
                                </li>
                            </ol>
                        </ul>
                        <h4>Investment Rules</h4>
                        <ul>
                            <ol>
                                <li>
                                    Every deposit is considered to be a private transaction
                                    between TUF and its client.
                                </li>
                                <li>
                                    Clients execute all financial transactions solely at their
                                    own discretion and their own risk. The amount of the deposit
                                    is determined personally by the project participant.
                                </li>
                                <li>
                                    Accrual of interest on the investment is calculated and
                                    credited to investor's account at the end of the investment term.
                                </li>
                                <li>
                                    The interest rate depends on the amount of investment, as well as selected
                                    tariff and deposit term
                                </li>
                                <li>
                                    Client has the discretion to choose any of the e-currencies available for
                                    deposit in the system. TUF accepts only USD for investing
                                </li>
                            </ol>
                        </ul>

                        <h4>Procedure of amending the present rules</h4>
                        <ul>
                            <ol>
                                <li>
                                    Administration of TUF reserves the right to make changes
                                    to the current project rules without the consent of investors.
                                </li>
                                <li>
                                    Administration of TUF will inform investors about such changes by
                                    publishing this information notice on the site of the project.
                                </li>
                                <li>
                                    The changes come in force from the date of placing the information
                                    on the site, unless otherwise provided in the text
                                </li>
                            </ol>
                        </ul>
                        <h4>Customer Service and Support</h4>
                        <ul>
                            <ol>
                                <li>
                                    Every client has the right to get any additional information from
                                    our support service.
                                </li>
                                <li>
                                    Client can contact our support service via our Support Form or
                                    Live Support Service.
                                </li>
                                <li>
                                    Customer agrees to behave politely with our support team and follow
                                    the instructions to prevent anyone from potentially negative situation.
                                </li>
                            </ol>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="sc_empty_space" data-height="2em" style="height: 2em;"></div>
        </div>
    </div>
@endsection
