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
      return `${label} ${getLabel("unlimited")}`;
      break; // eslint-disable-line no-unreachable
    case "-2":
      return `${label} ${getLabel("optionnal")}`;
      break; // eslint-disable-line no-unreachable
    default:
      return `${value} ${label} ${period}`;
  }
};

const Switch = ({ checked, onChange }) => {
  return (
    <div className="PeriodSwitch">
      <input
        className="PeriodSwitch-input"
        type="checkbox"
        checked={checked}
        onChange={onChange}
        id="period"
      />
      <label htmlFor="period" className="PeriodSwitch-paddle">
        <span className="PeriodSwitch-active">{getLabel("yearly")}</span>
        <span className="PeriodSwitch-inactive" aria-hidden="true">
          {getLabel("monthly")}
        </span>
      </label>
    </div>
  );
};

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
    const { plan } = this.props;
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
            <Plan plan={item} />
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
  plan: PropTypes.object.isRequired
};

Switch.propTypes = {
  checked: PropTypes.bool,
  onChange: PropTypes.func
};
