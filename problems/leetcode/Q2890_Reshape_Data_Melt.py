import pandas as pd

def meltTable(report: pd.DataFrame) -> pd.DataFrame:
    df = pd.DataFrame(report)
    return pd.melt(df, id_vars=['product'], var_name='quarter', value_name='sales')
