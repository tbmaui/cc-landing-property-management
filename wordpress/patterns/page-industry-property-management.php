<?php
/**
 * Title: Page — Industry: Property Management
 * Slug: cc-modern/page-industry-property-management
 * Categories: cc-page-starters
 * Block Types: core/post-content
 * Post Types: page
 * Description: Property management and real estate landing page with an illustrated ledger hero, per-property features, owner reporting, plan fit, client stories, FAQ and consultation form.
 * Keywords: property management, real estate, landlords, industry, landing page, full page
 * Viewport Width: 1400
 *
 * @package cc-modern
 */

$cc_industry = array(
	'class'    => 'cc-starter-page--property-management',
	'hero'     => array(
		'eyebrow' => __( 'Property Management and Real Estate', 'cc-modern' ),
		'title'   => __( 'Keep properties compliant, tenants supported, and cash flow predictable.', 'cc-modern' ),
		'lead'    => __( 'Property management bookkeeping from your personal team of financial experts. Audit-ready records for every property, accurate rent rolls and tenant ledgers, and clear owner reporting, so you can focus on returns and tenant satisfaction.', 'cc-modern' ),
		'trust'   => __( 'For property managers, landlords, real estate investors and firms, from a handful of doors to a multi-state portfolio.', 'cc-modern' ),
		'image'   => 'industry-property-management.svg',
		'alt'     => '',
	),
	'trust'    => array(
		__( 'Trusted by property managers, landlords and real estate firms nationwide', 'cc-modern' ),
		__( 'U.S.-based team', 'cc-modern' ),
		__( 'A personal team of financial experts on every account', 'cc-modern' ),
		__( 'Works with QuickBooks, AppFolio, Buildium and ADP', 'cc-modern' ),
	),
	'problem'  => array(
		'title'        => __( 'When the books slip, compliance, tenants and cash flow slip with them.', 'cc-modern' ),
		'p1'           => __( "Rent collection, maintenance costs, owner distributions and regulatory compliance all land on the same desk while you're trying to grow. When records get mixed between properties, staying audit-ready gets harder every month.", 'cc-modern' ),
		'p2'           => __( "Tenant ledgers fall out of date, so no one is sure who's paid and who's late. Repair bills get coded to the wrong property, owner statements take longer to explain, and suddenly you're asking the question every manager dreads: where did all the cash go?", 'cc-modern' ),
		'callout_lead' => __( 'Complete Controller keeps all three on track.', 'cc-modern' ),
		'callout_body' => __( "Your team keeps every property's records clean and separate, every tenant ledger current, and every owner statement clear, so cash flow becomes something you can plan around.", 'cc-modern' ),
	),
	'features' => array(
		'title'   => __( 'Bookkeeping that keeps your portfolio in order.', 'cc-modern' ),
		'pillars' => array( __( 'Compliant', 'cc-modern' ), __( 'Tenants supported', 'cc-modern' ), __( 'Cash flow predictable', 'cc-modern' ) ),
		'items'   => array(
			array(
				'tag'   => __( 'Compliant', 'cc-modern' ),
				'icon'  => 'layers',
				'title' => __( 'Every property tracked separately', 'cc-modern' ),
				'copy'  => __( 'Every dollar tracked by property, unit or full portfolio, with no mixing numbers between properties.', 'cc-modern' ),
			),
			array(
				'tag'   => __( 'Compliant', 'cc-modern' ),
				'icon'  => 'lock',
				'title' => __( 'Audit-ready records and oversight', 'cc-modern' ),
				'copy'  => __( 'Organized, audit-ready books reviewed by your Controller, with data encrypted and stored in secure U.S.-based cloud environments.', 'cc-modern' ),
			),
			array(
				'tag'   => __( 'Tenants supported', 'cc-modern' ),
				'icon'  => 'file',
				'title' => __( 'Accurate rent rolls and tenant ledgers', 'cc-modern' ),
				'copy'  => __( "Rent rolls and tenant ledgers kept current, so you always know who's paid, who's late and what needs attention.", 'cc-modern' ),
			),
			array(
				'tag'   => __( 'Tenants supported', 'cc-modern' ),
				'icon'  => 'home',
				'title' => __( 'Organized through turns and renewals', 'cc-modern' ),
				'copy'  => __( 'Systems that keep your records organized during turns, renewals and rapid growth, so your team can stay focused on tenants.', 'cc-modern' ),
			),
			array(
				'tag'   => __( 'Cash flow predictable', 'cc-modern' ),
				'icon'  => 'chart',
				'title' => __( 'Owner statements and distributions', 'cc-modern' ),
				'copy'  => __( 'Clean, clear owner statements that show income, expenses, distributions and property health.', 'cc-modern' ),
			),
			array(
				'tag'   => __( 'Cash flow predictable', 'cc-modern' ),
				'icon'  => 'cash',
				'title' => __( 'Cost allocation and budget versus actual', 'cc-modern' ),
				'copy'  => __( "Maintenance, repair and other expenses allocated by property or unit, with budget versus actual dashboards that show what's coming.", 'cc-modern' ),
			),
		),
	),
	'team'     => array(
		'title'            => __( 'Your personal team of financial experts, built for property managers.', 'cc-modern' ),
		'statement_before' => __( 'Compliant properties and predictable cash flow, kept on track by ', 'cc-modern' ),
		'statement_accent' => __( 'your team.', 'cc-modern' ),
		'intro'            => __( 'Every Complete Controller account comes with a Controller who oversees your portfolio, a Bookkeeper who keeps every property current, and CAS-i, our AI, so you can check on any property between conversations.', 'cc-modern' ),
		'tiles'            => array(
			array(
				'label' => __( 'Your Controller', 'cc-modern' ),
				'title' => __( 'Reviews the numbers and plans ahead with you.', 'cc-modern' ),
				'body'  => __( "Reviews each property's books, keeps records audit-ready, and prepares owner and portfolio reports you can plan around.", 'cc-modern' ),
			),
			array(
				'label' => __( 'Your Bookkeeper', 'cc-modern' ),
				'title' => __( 'Keeps your books current.', 'cc-modern' ),
				'body'  => __( 'Keeps rent rolls, tenant ledgers and expenses current for every property and reconciles your accounts, working in AppFolio, Buildium, QuickBooks and ADP.', 'cc-modern' ),
			),
			array(
				'label' => __( 'CAS-i, Your AI', 'cc-modern' ),
				'title' => __( 'Numbers that make sense, any time you ask.', 'cc-modern' ),
				'body'  => __( 'Ask questions about rent, expenses or owner reporting in plain language and get clear answers that help you decide what to do next. CAS-i explains your numbers and never changes your books.', 'cc-modern' ),
			),
			array(
				'label' => __( 'Owner Reporting', 'cc-modern' ),
				'title' => __( 'Owner statements your owners can actually read.', 'cc-modern' ),
				'body'  => __( 'Clean, clear monthly statements that show income, expenses, distributions and how each property is performing, so your owners stay confident in how you manage their investment.', 'cc-modern' ),
			),
		),
	),
	'steps'    => array(
		array(
			'title' => __( 'Book a free consultation', 'cc-modern' ),
			'copy'  => __( "Tell us about your properties, owners and current setup. We'll recommend the right level of support and give you a clear price.", 'cc-modern' ),
		),
		array(
			'title' => __( 'We organize every property', 'cc-modern' ),
			'copy'  => __( 'We set up your books so every property is tracked on its own and connect the tools you already use.', 'cc-modern' ),
		),
		array(
			'title' => __( 'Predictable reporting every month', 'cc-modern' ),
			'copy'  => __( 'Your Bookkeeper keeps every ledger current, your Controller sends owner and portfolio reports on a steady schedule, and CAS-i answers questions in between.', 'cc-modern' ),
		),
	),
	'asks'     => array(
		__( 'How did actual expenses compare with budget at each property?', 'cc-modern' ),
		__( 'What did maintenance cost across my properties last quarter?', 'cc-modern' ),
		__( 'Which tenants are behind on rent this month?', 'cc-modern' ),
	),
	'plans'    => array(
		'title' => __( 'Choose the level that fits your portfolio.', 'cc-modern' ),
		'intro' => __( 'Smaller holdings with light activity often start on Minimal or Basic. Managers handling owner funds, or investors reporting to partners or lenders, usually need the weekly attention of Complete.', 'cc-modern' ),
		'items' => array(
			array(
				'tag'      => __( 'Light activity', 'cc-modern' ),
				'name'     => __( 'Minimal', 'cc-modern' ),
				'price'    => '$165',
				'period'   => ' / month, billed quarterly',
				'setup'    => __( 'One-time setup: $1,050', 'cc-modern' ),
				'fit'      => __( 'a single property or small holding that needs clean, organized records each quarter.', 'cc-modern' ),
				'features' => array( __( 'Quarterly bookkeeping', 'cc-modern' ), __( 'Full report package', 'cc-modern' ), __( 'Your Controller, Bookkeeper and CAS-i', 'cc-modern' ) ),
			),
			array(
				'tag'      => __( 'Growing portfolios', 'cc-modern' ),
				'name'     => __( 'Basic', 'cc-modern' ),
				'price'    => '$405',
				'period'   => ' / month',
				'setup'    => __( 'One-time setup: $1,450', 'cc-modern' ),
				'fit'      => __( 'landlords and investors who want current tenant ledgers and monthly reporting for each property.', 'cc-modern' ),
				'features' => array( __( 'Monthly bookkeeping', 'cc-modern' ), __( 'Full report package', 'cc-modern' ), __( 'Your Controller, Bookkeeper and CAS-i', 'cc-modern' ) ),
			),
			array(
				'tag'      => __( 'Managing owner money', 'cc-modern' ),
				'name'     => __( 'Complete', 'cc-modern' ),
				'price'    => '$970',
				'period'   => ' / month',
				'setup'    => __( 'One-time setup: $1,650', 'cc-modern' ),
				'fit'      => __( 'property managers handling owner funds who need weekly updates, audit-ready books and predictable owner reporting.', 'cc-modern' ),
				'features' => array( __( 'Weekly bookkeeping', 'cc-modern' ), __( 'Custom report package', 'cc-modern' ), __( 'Audit ready', 'cc-modern' ), __( 'Your Controller, Bookkeeper and CAS-i', 'cc-modern' ) ),
				'pick'     => true,
			),
		),
		'note'  => __( "Each plan has a one-time setup fee to get your books ready. Pricing is sized to your workload, number of properties and reporting needs, and we'll give you a clear price on your consultation. Have in-house admin staff or a bookkeeper? We can support them with controller-level review. Need assistance with rents or tracking in other software? Just ask.", 'cc-modern' ),
	),
	'quotes'   => array(
		'title'    => __( 'What Owners and Managers Say', 'cc-modern' ),
		'featured' => false,
		'items'    => array(
			array(
				'text' => __( 'The onboarding went great, the team was very positive, knowledgeable, and the communication was very strong. I look forward to adding the rest of my entities.', 'cc-modern' ),
				'name' => 'Jeff Baxter',
				'role' => 'Midstreet Realty, LLC',
			),
			array(
				'text' => __( 'My Controller and Bookkeeper have been great communicators and absolutely perfect supporting me with my business operations!', 'cc-modern' ),
				'name' => 'Keith DeMattis',
				'role' => "President, Nana's Secret LLC",
			),
		),
	),
	'faq'      => array(
		'title' => __( 'What owners and managers ask us.', 'cc-modern' ),
		'items' => array(
			array(
				'q' => __( 'I manage multiple properties. Can you keep each one separate?', 'cc-modern' ),
				'a' => __( 'Yes. We track every dollar by property, unit or full portfolio, so you get performance insights at every level with no mixing numbers.', 'cc-modern' ),
			),
			array(
				'q' => __( 'Can you help me stay on top of rent collections?', 'cc-modern' ),
				'a' => __( "Yes. We keep rent rolls and tenant ledgers accurate and up to date, so you always know who's paid, who's late and what needs attention. Need help with rents or tracking in other software? Just ask. We can discuss how to support the systems you already use.", 'cc-modern' ),
			),
			array(
				'q' => __( 'Our owners want clear monthly reports. Can you make them easier to understand?', 'cc-modern' ),
				'a' => __( 'Yes. We prepare clean, clear owner statements that highlight the essentials: income, expenses, distributions and property health.', 'cc-modern' ),
			),
			array(
				'q' => __( 'Can you help us track maintenance costs accurately?', 'cc-modern' ),
				'a' => __( 'Yes. We categorize and allocate maintenance and repair expenses so you can see true property profitability.', 'cc-modern' ),
			),
			array(
				'q' => __( 'How safe is tenant and financial data with you?', 'cc-modern' ),
				'a' => __( 'Your data is encrypted, protected and stored in secure U.S.-based cloud environments.', 'cc-modern' ),
			),
			array(
				'q' => __( 'I already use AppFolio or Buildium. Do I have to switch tools?', 'cc-modern' ),
				'a' => __( 'No. We work with AppFolio, Buildium, QuickBooks and other property management systems. You keep your tools and we make your numbers stronger.', 'cc-modern' ),
			),
			array(
				'q' => __( 'We have in-house staff. Do you replace them or support them?', 'cc-modern' ),
				'a' => __( 'We support them. Many firms keep their internal bookkeeper or admin team and use us for controller-level review, accuracy checks, cleanup and oversight, so they stay audit-ready and year-end is much cleaner.', 'cc-modern' ),
			),
			array(
				'q' => __( 'How much does property management bookkeeping cost?', 'cc-modern' ),
				'a' => __( "Pricing is transparent and sized to your workload, number of properties and reporting needs. Plans start at \$165 a month (billed quarterly) for Minimal, with Basic at \$405 a month and Complete at \$970 a month, plus a one-time setup fee. Whether you manage a handful of doors or a multi-state portfolio, we'll recommend the right level on your free consultation.", 'cc-modern' ),
			),
		),
	),
);

echo cc_modern_render_industry_page( $cc_industry ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
unset( $cc_industry );
