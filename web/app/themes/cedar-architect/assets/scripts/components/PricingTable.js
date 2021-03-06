import React, { Component } from "react";
import PropTypes from "prop-types";
import LightenDarkenColor from "../util/services";

const getLabel = key => {
  return window.cedarLabels[key];
};

const getPerPeriod = (value1, value2, labelKey, monthly) => {
  const value = monthly ? value2 : value1;
  const label = labelKey == null ? "" : getLabel(labelKey);
  const period =
    monthly != null
      ? monthly ? getLabel("per-month") : getLabel("per-year")
      : "";
  switch (value) {
    case "":
    case "0":
      return "-";
      break; // eslint-disable-line no-unreachable
    case "-1":
      if (document.documentElement.lang === "en-US") {
        return `${getLabel("unlimited")} ${label}`;
      }
      return `${label} ${getLabel("unlimited")}`;
      break; // eslint-disable-line no-unreachable
    case "-2":
      if (document.documentElement.lang === "en-US") {
        return `${getLabel("optionnal")} ${label}`;
      }
      return `${label} ${getLabel("optionnal")}`;
      break; // eslint-disable-line no-unreachable
    default:
      if(label === '$' || value === '1') {
        return `${value} ${label} ${period}`;
      }
      return `${value} ${label}s ${period}`;
  }
};

const Switch = ({ checked, onChange, reference, planId }) => {
  return (
    <div className="PeriodSwitch">
      <input
        className="PeriodSwitch-input"
        type="checkbox"
        checked={checked}
        onChange={onChange}
        id={`perios${planId}`}
        ref={reference}
      />
      <label htmlFor={`perios${planId}`} className="PeriodSwitch-paddle">
        <span className="PeriodSwitch-active">{getLabel("yearly")}</span>
        <span className="PeriodSwitch-inactive" aria-hidden="true">
          {getLabel("monthly")}
        </span>
      </label>
    </div>
  );
};

const FocusIcon = () => {
  return (
    <svg className="FocusIcon" viewBox="0 0 30 32">
      <title>favorite</title>
      <path d="M29.714 11.554q0 0.393-0.464 0.857l-6.482 6.321 1.536 8.929q0.018 0.125 0.018 0.357 0 0.375-0.188 0.634t-0.545 0.259q-0.339 0-0.714-0.214l-8.018-4.214-8.018 4.214q-0.393 0.214-0.714 0.214-0.375 0-0.563-0.259t-0.188-0.634q0-0.107 0.036-0.357l1.536-8.929-6.5-6.321q-0.446-0.482-0.446-0.857 0-0.661 1-0.821l8.964-1.304 4.018-8.125q0.339-0.732 0.875-0.732t0.875 0.732l4.018 8.125 8.964 1.304q1 0.161 1 0.821z"></path>
    </svg>
  );
}

class Plan extends Component {
  // getinitialState
  constructor(props) {
    super(props);
    this.state = {
      displayMonthly: this.props.plan.duration === "both" ? true : false
    };
  }
  togglePeriod() {
    this.setState({ displayMonthly: !this.state.displayMonthly });
  }
  render() {
    const { plan, index } = this.props;
    const focus = plan.focus ? 'focus' : '';
    const period = plan.duration != "none" ? this.state.displayMonthly : null;
    const planLink = this.state.displayMonthly
      ? plan.linkMonthly || "#"
      : plan.link || "#";
    const renderPlanPrice = () => {
      if (plan.price == 0) {
        return getLabel("free");
      }

      return getPerPeriod(plan.price, plan.priceMonthly, "devise", period);
    };

    return (
      <article className="Plan">
        <header className="Plan-header">
          <h2 className="Plan-title" style={{ backgroundColor: plan.color }}>
            {plan.focus && <FocusIcon />}
            {plan.title}
          </h2>
          <div
            className="Plan-price"
            style={{ backgroundColor: LightenDarkenColor(plan.color, 30) }}
          >
            {renderPlanPrice()}
            {plan.duration === 'both' && !this.state.displayMonthly && (
              <div className="Plan-price-mention">({getLabel("gift")})</div>
            )}
            {plan.duration == "both" && (
              <Switch
                onChange={() => this.togglePeriod()}
                checked={!this.state.displayMonthly}
                reference={input => this.switchInput = input}
                planId={index}
              />
            )}
          </div>
          <div className="Plan-projects" style={{ color: plan.color }}>
            {getPerPeriod(
              plan.projects,
              plan.projectsMonthly,
              "projects",
              period
            )}
          </div>
        </header>
        <section className="Plan-section">
          <h3 className="Plan-section-title">{getLabel("renderings")}</h3>
          <ul className="Plan-section-items">
            <li className="Plan-section-item">
              {getPerPeriod(
                plan.visuals,
                plan.visualsMonthly,
                "hd-renderings",
                period
              )}
            </li>
            <li className="Plan-section-item">
              {getPerPeriod(
                plan.print,
                plan.printMonthly,
                "print-renderings",
                period
              )}
            </li>
            <li className="Plan-section-item">
              {getPerPeriod(
                plan.virtuals,
                plan.virtualsMonthly,
                "virtual-renderings",
                period
              )}
            </li>
          </ul>
          <h3 className="Plan-section-title">{getLabel("rechargeable")}</h3>
          <ul className="Plan-section-items">
            <li className="Plan-section-item">
              {plan.refill ? getLabel("credits") : "-"}
            </li>
          </ul>
          <h3 className="Plan-section-title">{getLabel("features")}</h3>
          <ul className="Plan-section-items">
            <li className="Plan-section-item">
              {plan.features.indexOf("library") !== -1 ? (
                getLabel("libraries")
              ) : (
                "-"
              )}
            </li>
            <li className="Plan-section-item">
              {plan.features.indexOf("plans") !== -1 ? getLabel("plans") : "-"}
            </li>
            <li className="Plan-section-item">
              {plan.features.indexOf("virtualVisits") !== -1 ? (
                getLabel("virtualsVisits")
              ) : (
                "-"
              )}
            </li>
          </ul>
          <h3 className="Plan-section-title">{getLabel("support")}</h3>
          <ul className="Plan-section-items">
            <li className="Plan-section-item">
              {plan.support.indexOf("tutorials") !== -1 ? (
                getLabel("tutorials")
              ) : (
                "-"
              )}
            </li>
            <li className="Plan-section-item">
              {plan.support.indexOf("forums") !== -1 ? getLabel("forums") : "-"}
            </li>
            <li className="Plan-section-item">
              {plan.support.indexOf("kbase") !== -1 ? getLabel("kbase") : "-"}
            </li>
            <li className="Plan-section-item">
              {plan.support.indexOf("tickets") !== -1 ? (
                getLabel("tickets")
              ) : (
                "-"
              )}
            </li>
            <li className="Plan-section-item">
              {plan.support.indexOf("chat") !== -1 ? getLabel("chat") : "-"}
            </li>
          </ul>
          <a
            href={planLink}
            className="Plan-button"
            style={{ backgroundColor: plan.color }}
          >
            {getLabel("start")}
          </a>
        </section>
      </article>
    );
  }
}

export default class PricingTable extends Component {
  constructor() {
    super();
    // getinitialState
    this.state = {
      plans: []
    };
  }

  componentDidMount() {
    const dataURL = `/wp-json/wp/v2/pages/${this.props.pageID}`;
    fetch(dataURL)
      .then(response => response.json())
      .then(response => {
        this.setState({ plans: response.acf.plans });
      });
  }

  render() {
    const plans = this.state.plans;
    return (
      <ul className="PricingTable">
        {plans.map((item, index) => (
          <li key={index + 1} className="PricingTable-item">
            <Plan plan={item} index={index + 1} />
          </li>
        ))}
      </ul>
    );
  }
}

PricingTable.propTypes = {
  pageID: PropTypes.string.isRequired
};

Plan.propTypes = {
  plan: PropTypes.object.isRequired,
  index: PropTypes.number.isRequired
};

Switch.propTypes = {
  checked: PropTypes.bool,
  onChange: PropTypes.func,
  reference: PropTypes.func,
  planId: PropTypes.number.isRequired
};
FocusIcon.propTypes = {
  width: PropTypes.number
};
