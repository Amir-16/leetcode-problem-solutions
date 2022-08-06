class Solution:
    # @param {string} s
    # @return {integer}
    def romanToInt(self, s):
        romanValue = {'M': 1000,'D': 500 ,'C': 100,'L': 50,'X': 10,'V': 5,'I': 1}
        
        result = 0
        for i in range(len(s)-1):
            if romanValue[s[i]]<romanValue[s[i+1]]:
                result-=romanValue[s[i]]
            else:
                result+=romanValue[s[i]]
        else:
            result+=romanValue[s[-1]]
        
        return result

